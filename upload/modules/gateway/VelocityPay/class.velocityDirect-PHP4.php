<?php
/**
* Class for Direct Connection Velocity Pay Gateway 400
* Author: Ben Barnett
* For more information please see http://www.velocitypay.co.uk
* 
* 25.11.2005
* 
* Requirements: PHP 4.3 or later
* 
*/

class VelocityDirect
{
    var $gatewayURL;
    /**
    * Required Gateway Variables - Set by module or cart
    */
    var $VPMerchantID;
    var $VPMerchantPassword;
    var $VPAmount;
    var $VPOrderDesc;
    var $VPTransactionUnique;
    
    /**
    * Credit/Debit Card Details
    */
    var $VPCardName;
    var $VPCardNumber;
    var $VPExpiryDateMM;
    var $VPExpiryDateYY;
    var $VPIssueNumber;
    var $VPStartDateMM;
    var $VPStartDateYY;
    var $VPCV2;
    
    /**
    * Address Details
    */
    var $VPBillingHouseNumber;
    var $VPBillingStreet;
    var $VPBillingCity;
    var $VPBillingState;
    var $VPBillingPostCode;
    var $VPBillingEmail;
    var $VPBillingPhoneNumber;
    var $VPCountryCode;
    var $VPCurrencyCode;
    
    /**
    * Response Details
    */
    var $rawOutput;
    var $VPResponseCode;
    var $VPMessage;
    var $VPCrossReference;
    
    
    function VelocityDirect($testMode, $VPMerchantID, $VPMerchantPassword, $secureDir="velocitypay") 
    {
        if ($testMode==1)
        {
            $this->VPMerchantID="testmerch";
            $this->VPMerchantPassword="testpass";
        }
        else
        {
            $this->VPMerchantID=$VPMerchantID;
			$this->VPMerchantPassword=$VPMerchantPassword;
        }
        
        $this->gatewayURL = "https://www.velocitypay.co.uk/merchantsecure/".$secureDir."/VPDirect.cfm";
    }
    
    function setCardDetails($VPCardName, $VPCardNumber, $VPExpiryDateMM, 
    $VPExpiryDateYY, $VPIssueNumber=null, $VPStartDateMM=null, $VPStartDateYY=null, $VPCV2=null)
    {
        $this->VPCardName=$VPCardName;
        $this->VPCardNumber=$VPCardNumber;
        $this->VPExpiryDateMM=$VPExpiryDateMM;
        $this->VPExpiryDateYY=$VPExpiryDateYY;
        $this->VPIssueNumber=$VPIssueNumber;
        $this->VPStartDateMM=$VPStartDateMM;
        $this->VPStartDateYY=$VPStartDateYY;
        $this->VPCV2=$VPCV2;
    }
    
    function setAddressDetails($VPBillingHouseNumber, $VPBillingStreet, $VPBillingCity,
    $VPBillingState, $VPBillingPostCode, $VPCountryCode, $VPCurrencyCode, $VPBillingEmail=null, $VPBillingPhoneNumber=null)
    {
        $this->VPBillingHouseNumber=$VPBillingHouseNumber;
        $this->VPBillingStreet=$VPBillingStreet;
        $this->VPBillingCity=$VPBillingCity;
        $this->VPBillingState=$VPBillingState;
        $this->VPBillingPostCode=$VPBillingPostCode;
        $this->VPCountryCode=str_pad($VPCountryCode,3,"0",STR_PAD_LEFT);
        $this->VPCurrencyCode=str_pad($VPCurrencyCode,3,"0",STR_PAD_LEFT); 
        $this->VPBillingEmail=$VPBillingEmail;
        $this->VPBillingPhoneNumber=$VPBillingPhoneNumber;
    }
    
    function setOrderDetails($VPAmount, $VPOrderDesc, $VPTransactionUnique)
    {
        $this->VPAmount=$VPAmount;
        $this->VPOrderDesc=$VPOrderDesc;
        $this->VPTransactionUnique=$VPTransactionUnique;
    }
    
    function process()  
    {
        $fields = array(
            "VPMerchantID"=>$this->VPMerchantID,
            "VPMerchantPassword"=>$this->VPMerchantPassword,
            "VPAmount"=>$this->VPAmount,
            "VPOrderDesc"=>$this->VPOrderDesc,
            "VPTransactionUnique"=>$this->VPTransactionUnique,
            "VPCardName"=>$this->VPCardName,
            "VPCardNumber"=>$this->VPCardNumber,
            "VPExpiryDateMM"=>$this->VPExpiryDateMM,
            "VPExpiryDateYY"=>$this->VPExpiryDateYY, 
            "VPIssueNumber"=>$this->VPIssueNumber,
            "VPStartDateMM"=>$this->VPStartDateMM,
            "VPStartDateYY"=>$this->VPStartDateYY,
            "VPCV2"=>$this->VPCV2,
            "VPBillingHouseNumber"=>$this->VPBillingHouseNumber,
            "VPBillingStreet"=>$this->VPBillingStreet,
            "VPBillingCity"=>$this->VPBillingCity,
            "VPBillingState"=>$this->VPBillingState,
            "VPBillingPostCode"=>$this->VPBillingPostCode,
            "VPBillingEmail"=>$this->VPBillingEmail,
            "VPBillingPhoneNumber"=>$this->VPBillingPhoneNumber,
            "VPCountryCode"=>$this->VPCountryCode, 
            "VPCurrencyCode"=>$this->VPCurrencyCode
        );
        
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $this->gatewayURL); // Set the URL
        curl_setopt($ch, CURLOPT_POST, 1); // Perform a POST
        // curl_setopt($ch, CURLOPT_CAINFO, "c:\\windows\\ca-bundle.crt"); // Name of the file to verify the server's cert against
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // Turns off verification of the SSL certificate.
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // If not set, curl prints output to the browser
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);

        $this->rawOutput = curl_exec($ch);

        curl_close($ch);
        
        $this->parsePaymentString();
    }
    
    function parsePaymentString()
    {
        $vars = explode("&",$this->rawOutput);
	    $array = array();
	    
	    foreach ($vars as $var) {
		    $tempArray = explode("=", $var);
		    $array[$tempArray[0]]=$tempArray[1];
	    }
	    
        $this->VPResponseCode=$array['VPResponseCode'];
        $this->VPMessage=$array['VPMessage'];
        $this->VPCrossReference=$array['VPCrossReference'];
    }
    
    
    function getResponseCode()
    {
        return $this->VPResponseCode;
    }
    
    function getMessage()
    {
        return $this->VPMessage;
    }
    
    function getCrossReference()
    {
        return $this->VPCrossReference;
    }
    
}
?>