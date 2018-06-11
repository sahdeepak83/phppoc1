<?php  
//ini_set('display_errors', 0);
//error_reporting(E_ALL);
include("config/databasewithsoap.php");
$db = new dbObj();
$connString =  $db->getConnstring();
$conn= $connString;
$xmlOutput='<?xml version="1.0" encoding="UTF-8"?>
<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
 <soapenv:Body>
  <notifications xmlns="http://soap.sforce.com/2005/09/outbound">
   <OrganizationId>00Dq0000000Br2GEAS</OrganizationId>
   <ActionId>04kq00000008PhpAAE</ActionId>
   <SessionId xsi:nil="true"/>
   <EnterpriseUrl>https://cs21.salesforce.com/services/Soap/c/43.0/00Dq0000000Br2G</EnterpriseUrl>
   <PartnerUrl>https://cs21.salesforce.com/services/Soap/u/43.0/00Dq0000000Br2G</PartnerUrl>
   <Notification>
    <Id>04lq000000Qb046AAB</Id>
    <sObject xsi:type="sf:Individual_Tip_Non_Tip_Events__c" xmlns:sf="urn:sobject.enterprise.soap.sforce.com">
     <sf:Id>a09q0000006BAHkAAO</sf:Id>
	 <sf:Ammout_Over_Limit_mph__c>0.0</sf:Ammout_Over_Limit_mph__c>
     <sf:Amount_Over_Limit_Km_h__c>0.0</sf:Amount_Over_Limit_Km_h__c>
     <sf:Asset_Serial__c>95G022373</sf:Asset_Serial__c>
     <sf:Asset_Type__c>Trash</sf:Asset_Type__c>
     <sf:City__c>Irving</sf:City__c>
     <sf:Collection_Route_Text__c>EZA1F</sf:Collection_Route_Text__c>
     <sf:Collection_Route__c>a0J61000003D3XrEAK</sf:Collection_Route__c>
     <sf:Container_RFID_tag__c>0001094C4114149479505765</sf:Container_RFID_tag__c>
     <sf:Country__c>United States</sf:Country__c>
     <sf:CreatedById>00561000001xuJFAAY</sf:CreatedById>
     <sf:CreatedDate>2018-06-02T20:51:34.000Z</sf:CreatedDate>
	 <sf:CreatedDateOnly__c>3/19/2018</sf:CreatedDateOnly__c>
     <sf:Customer_Location__c>a0461000009c7IBAAY</sf:Customer_Location__c>
     <sf:Distance__c>5.534</sf:Distance__c>
	 <sf:Duration__c>20</sf:Duration__c>
	 <sf:Error_Code__c>test</sf:Error_Code__c>
     <sf:Error_Description__c>HarshBraking</sf:Error_Description__c>
	 <sf:Event_End_Date_Time__c>2018-06-02T21:44:00.000Z</sf:Event_End_Date_Time__c>
     <sf:Event_End__Latitude__s>45.5527167</sf:Event_End__Latitude__s>
     <sf:Event_End__Longitude__s>-94.1307667</sf:Event_End__Longitude__s>
     <sf:Event_Start_Date_Time__c>2017-11-25T11:43:00.000Z</sf:Event_Start_Date_Time__c>
     <sf:Event_Start_Date__c>2017-11-25</sf:Event_Start_Date__c>
     <sf:Event_Start_Tip_Date__c>2018-06-02T21:44:00.000Z</sf:Event_Start_Tip_Date__c>
     <sf:Event_Start__Latitude__s>45.5527167</sf:Event_Start__Latitude__s>
     <sf:Event_Start__Longitude__s>-94.1307667</sf:Event_Start__Longitude__s>
     <sf:HarshAcceleration__c>5030396.0</sf:HarshAcceleration__c>
	 <sf:HarshBrakingInsyncId__c>5029829.0</sf:HarshBrakingInsyncId__c>
	 <sf:Heading__c>361 N</sf:Heading__c>
	 <sf:HeartbeatInsyncId__c>5030396.0</sf:HeartbeatInsyncId__c>
	 <sf:House_Number__c>213</sf:House_Number__c>
	 <sf:IdleTimeInsyncId__c>1884268.0</sf:IdleTimeInsyncId__c>
     <sf:InsyncId__c>1884268.0</sf:InsyncId__c>
     <sf:IsDeleted>false</sf:IsDeleted>
     <sf:IsLatestTip__c>false</sf:IsLatestTip__c>
     <sf:Is_GPS_Location__c>0.0</sf:Is_GPS_Location__c>
     <sf:Is_Tipped_Twice__c>true</sf:Is_Tipped_Twice__c>
	 <sf:Is_Tip_Mismatched__c>true</sf:Is_Tip_Mismatched__c>
     <sf:Is_Viewable_On_Map__c>true</sf:Is_Viewable_On_Map__c>
     <sf:LastModifiedById>00561000001xuJFAAY</sf:LastModifiedById>
     <sf:LastModifiedDate>2018-06-02T20:51:34.000Z</sf:LastModifiedDate>
     <sf:LastReferencedDate>2018-06-02T20:52:07.000Z</sf:LastReferencedDate>
     <sf:LastViewedDate>2018-06-02T20:52:07.000Z</sf:LastViewedDate>
     <sf:Location_Address__c>719 N Vermont Ave, Lakeland, FL 33801, USA</sf:Location_Address__c>
     <sf:Max_Speed_Miles_per_hour__c>35.0</sf:Max_Speed_Miles_per_hour__c>
	 <sf:Name>testheroku2</sf:Name>
     <sf:ObservationInsyncId__c>5029829.0</sf:ObservationInsyncId__c>
     <sf:Observation_Description__c>Contamination</sf:Observation_Description__c>
     <sf:Observation_Number__c>1.0</sf:Observation_Number__c>
     <sf:Obs_Num_Desc__c>test</sf:Obs_Num_Desc__c>
     <sf:OwnerId>00561000001xuJFAAY</sf:OwnerId>
	 <sf:readerEvent__c>test</sf:readerEvent__c>
     <sf:RecordTypeId>01261000000XuHRAA0</sf:RecordTypeId>
	 <sf:Responce_JSON__c>test</sf:Responce_JSON__c>
	 <sf:Service_Provider__c>0016100000diOthAAE</sf:Service_Provider__c>
     <sf:SFDC_Container_Asset__c>02i61000001Mud9AAC</sf:SFDC_Container_Asset__c>
     <sf:SFDC_Device_Id__c>a066100000FfGowAAF</sf:SFDC_Device_Id__c>
     <sf:SFDC_Truck_ID__c>a0O610000072GVBEA2</sf:SFDC_Truck_ID__c>
     <sf:SpeedingInsyncId__c>5082996.0</sf:SpeedingInsyncId__c>
	 <sf:State__c>IL</sf:State__c>
     <sf:Street__c>trula ln</sf:Street__c>
     <sf:Telematic_Event_Date__c>2016-09-06</sf:Telematic_Event_Date__c>
	 <sf:Timezone__c>America/Chicago</sf:Timezone__c>
     <sf:TipNoTipNumber__c>1.0</sf:TipNoTipNumber__c>
     <sf:Tip_DateTime__c>9/6/2016 9:35:00 AM CDT</sf:Tip_DateTime__c>
     <sf:Tip_Date_Time__c>2016-09-06T14:35:00.000Z</sf:Tip_Date_Time__c>
     <sf:Tip_Date__c>2016-09-06</sf:Tip_Date__c>
     <sf:Tip_hour_range__c>12 AM</sf:Tip_hour_range__c>
	 <sf:Tip_Hour__c>7.0</sf:Tip_Hour__c>
     <sf:Tip_Lat_Lon__Latitude__s>28.0511255</sf:Tip_Lat_Lon__Latitude__s>
     <sf:Tip_Lat_Lon__Longitude__s>-81.9516583</sf:Tip_Lat_Lon__Longitude__s>
     <sf:Tip_or_Non_Tip__c>true</sf:Tip_or_Non_Tip__c>
     <sf:Truck_No__c>7183550</sf:Truck_No__c>
     <sf:Truck_Type__c>Rear-Loader</sf:Truck_Type__c>
     <sf:Zip_Code__c>60056</sf:Zip_Code__c>
    </sObject>
   </Notification>
  </notifications>
 </soapenv:Body>
</soapenv:Envelope>
';
//$xmlOutput = file_get_contents('php://input');
//$xmlOutput = $GLOBALS['HTTP_RAW_POST_DATA'];		
//Get XML Array 
$clean_xml=array();
$clean_xml = str_ireplace(['soapenv:', 'SOAP:'], '', $xmlOutput);
$clean_xml = str_ireplace(['sf:', 'SOAP:'], '', $clean_xml);
$xml = simplexml_load_string($clean_xml);
$xmlarray =object_to_array($xml); 
if(!empty($xmlarray) && $xmlarray!=='no_record'){
    foreach ($xmlarray as $key=>$val){
		    $OrganizationId=$val['notifications']['OrganizationId'];
			
			//for single records
		if(empty($val['notifications']['Notification'][0])){
			
			foreach($val as $fdata){
				$Id = isset($fdata['Notification']['sObject']['Id']) ? $fdata['Notification']['sObject']['Id'] : 'null';
				$Ammout_Over_Limit_mph__c = isset($fdata['Notification']['sObject']['Ammout_Over_Limit_mph__c']) ? $fdata['Notification']['sObject']['Ammout_Over_Limit_mph__c'] : 'null';
				$Amount_Over_Limit_Km_h__c = isset($fdata['Notification']['sObject']['Amount_Over_Limit_Km_h__c']) ? $fdata['Notification']['sObject']['Amount_Over_Limit_Km_h__c'] : 'null';
				$Asset_Serial__c = isset($fdata['Notification']['sObject']['Asset_Serial__c']) ? $fdata['Notification']['sObject']['Asset_Serial__c'] : 'null';
				$Asset_Type__c = isset($fdata['Notification']['sObject']['Asset_Type__c']) ? $fdata['Notification']['sObject']['Asset_Type__c'] : 'null';
				$City__c = isset($fdata['Notification']['sObject']['City__c']) ? $fdata['Notification']['sObject']['City__c'] : 'null';
				$Collection_Route_Text__c = isset($fdata['Notification']['sObject']['Collection_Route_Text__c']) ? $fdata['Notification']['sObject']['Collection_Route_Text__c'] : 'null';
				$Collection_Route__c = isset($fdata['Notification']['sObject']['Collection_Route__c']) ? $fdata['Notification']['sObject']['Collection_Route__c'] : 'null';
				$Container_RFID_tag__c = isset($fdata['Notification']['sObject']['Container_RFID_tag__c']) ? $fdata['Notification']['sObject']['Container_RFID_tag__c'] : 'null';
				$Country__c = isset($fdata['Notification']['sObject']['Country__c']) ? $fdata['Notification']['sObject']['Country__c'] : 'null';
				$CreatedById = isset($fdata['Notification']['sObject']['CreatedById']) ? $fdata['Notification']['sObject']['CreatedById'] : 'null';
				$CreatedDate = isset($fdata['Notification']['sObject']['CreatedDate']) ? $fdata['Notification']['sObject']['CreatedDate'] : 'null';
				$CreatedDateOnly__c = isset($fdata['Notification']['sObject']['CreatedDateOnly__c']) ? $fdata['Notification']['sObject']['CreatedDateOnly__c'] : 'null';
				$Customer_Location__c = isset($fdata['Notification']['sObject']['Customer_Location__c']) ? $fdata['Notification']['sObject']['Customer_Location__c'] : 'null';
				$Distance__c = isset($fdata['Notification']['sObject']['Distance__c']) ? $fdata['Notification']['sObject']['Distance__c'] : 'null';
				$Duration__c = isset($fdata['Notification']['sObject']['Duration__c']) ? $fdata['Notification']['sObject']['Duration__c'] : 'null';
				$Error_Code__c = isset($fdata['Notification']['sObject']['Error_Code__c']) ? $fdata['Notification']['sObject']['Error_Code__c'] : 'null';
				$Error_Description__c = isset($fdata['Notification']['sObject']['Error_Description__c']) ? $fdata['Notification']['sObject']['Error_Description__c'] : 'null';
				$Event_End_Date_Time__c = isset($fdata['Notification']['sObject']['Event_End_Date_Time__c']) ? $fdata['Notification']['sObject']['Event_End_Date_Time__c'] : 'null';
				$Event_End__Latitude__s = isset($fdata['Notification']['sObject']['Event_End__Latitude__s']) ? $fdata['Notification']['sObject']['Event_End__Latitude__s'] : 'null';
				$Event_End__Longitude__s = isset($fdata['Notification']['sObject']['Event_End__Longitude__s']) ? $fdata['Notification']['sObject']['Event_End__Longitude__s'] : 'null';
				$Event_Start_Date_Time__c = isset($fdata['Notification']['sObject']['Event_Start_Date_Time__c']) ? $fdata['Notification']['sObject']['Event_Start_Date_Time__c'] : 'null';
				$Event_Start_Date__c = isset($fdata['Notification']['sObject']['Event_Start_Date__c']) ? $fdata['Notification']['sObject']['Event_Start_Date__c'] : 'null';
				$Event_Start_Tip_Date__c = isset($fdata['Notification']['sObject']['Event_Start_Tip_Date__c']) ? $fdata['Notification']['sObject']['Event_Start_Tip_Date__c'] : 'null';				
				$Event_Start__Latitude__s = isset($fdata['Notification']['sObject']['Event_Start__Latitude__s']) ? $fdata['Notification']['sObject']['Event_Start__Latitude__s'] : 'null';
				$Event_Start__Longitude__s = isset($fdata['Notification']['sObject']['Event_Start__Longitude__s']) ? $fdata['Notification']['sObject']['Event_Start__Longitude__s'] : 'null';
				$HarshAcceleration__c = isset($fdata['Notification']['sObject']['HarshAcceleration__c']) ? $fdata['Notification']['sObject']['HarshAcceleration__c'] : 'null';
				$HarshBrakingInsyncId__c = isset($fdata['Notification']['sObject']['HarshBrakingInsyncId__c']) ? $fdata['Notification']['sObject']['HarshBrakingInsyncId__c'] : 'null';
				$Heading__c = isset($fdata['Notification']['sObject']['Heading__c']) ? $fdata['Notification']['sObject']['Heading__c'] : 'null';
				$HeartbeatInsyncId__c = isset($fdata['Notification']['sObject']['HeartbeatInsyncId__c']) ? $fdata['Notification']['sObject']['HeartbeatInsyncId__c'] : 'null';
				$House_Number__c = isset($fdata['Notification']['sObject']['House_Number__c']) ? $fdata['Notification']['sObject']['House_Number__c'] : 'null';
				$IdleTimeInsyncId__c = isset($fdata['Notification']['sObject']['IdleTimeInsyncId__c']) ? $fdata['Notification']['sObject']['IdleTimeInsyncId__c'] : 'null';
				$InsyncId__c = isset($fdata['Notification']['sObject']['InsyncId__c']) ? $fdata['Notification']['sObject']['InsyncId__c'] : 'null';
				$IsDeleted = isset($fdata['Notification']['sObject']['IsDeleted']) ? $fdata['Notification']['sObject']['IsDeleted'] : 'null';
				$IsLatestTip__c = isset($fdata['Notification']['sObject']['IsLatestTip__c']) ? $fdata['Notification']['sObject']['IsLatestTip__c'] : 'null';
				$Is_GPS_Location__c = isset($fdata['Notification']['sObject']['Is_GPS_Location__c']) ? $fdata['Notification']['sObject']['Is_GPS_Location__c'] : 'null';
				$Is_Tipped_Twice__c = isset($fdata['Notification']['sObject']['Is_Tipped_Twice__c']) ? $fdata['Notification']['sObject']['Is_Tipped_Twice__c'] : 'null';
				$Is_Tip_Mismatched__c = isset($fdata['Notification']['sObject']['Is_Tip_Mismatched__c']) ? $fdata['Notification']['sObject']['Is_Tip_Mismatched__c'] : 'null';
				$Is_Viewable_On_Map__c = isset($fdata['Notification']['sObject']['Is_Viewable_On_Map__c']) ? $fdata['Notification']['sObject']['Is_Viewable_On_Map__c'] : 'null';
				$LastModifiedById = isset($fdata['Notification']['sObject']['LastModifiedById']) ? $fdata['Notification']['sObject']['LastModifiedById'] : 'null';
				$LastModifiedDate = isset($fdata['Notification']['sObject']['LastModifiedDate']) ? $fdata['Notification']['sObject']['LastModifiedDate'] : 'null';
				$LastReferencedDate = isset($fdata['Notification']['sObject']['LastReferencedDate']) ? $fdata['Notification']['sObject']['LastReferencedDate'] : 'null';
				$LastViewedDate = isset($fdata['Notification']['sObject']['LastViewedDate']) ? $fdata['Notification']['sObject']['LastViewedDate'] : 'null';	
				$Location_Address__c = isset($fdata['Notification']['sObject']['Location_Address__c']) ? $fdata['Notification']['sObject']['Location_Address__c'] : 'null';
				$Max_Speed_Miles_per_hour__c = isset($fdata['Notification']['sObject']['Max_Speed_Miles_per_hour__c']) ? $fdata['Notification']['sObject']['Max_Speed_Miles_per_hour__c'] : 'null';
				$Name = isset($fdata['Notification']['sObject']['Name']) ? $fdata['Notification']['sObject']['Name'] : 'null';
				$ObservationInsyncId__c = isset($fdata['Notification']['sObject']['ObservationInsyncId__c']) ? $fdata['Notification']['sObject']['ObservationInsyncId__c'] : 'null';
				$Observation_Description__c = isset($fdata['Notification']['sObject']['Observation_Description__c']) ? $fdata['Notification']['sObject']['Observation_Description__c'] : 'null';
				$Observation_Number__c = isset($fdata['Notification']['sObject']['Observation_Number__c']) ? $fdata['Notification']['sObject']['Observation_Number__c'] : 'null';
				$Obs_Num_Desc__c = isset($fdata['Notification']['sObject']['Obs_Num_Desc__c']) ? $fdata['Notification']['sObject']['Obs_Num_Desc__c'] : 'null';
				$OwnerId = isset($fdata['Notification']['sObject']['OwnerId']) ? $fdata['Notification']['sObject']['OwnerId'] : 'null';
				$readerEvent__c = isset($fdata['Notification']['sObject']['readerEvent__c']) ? $fdata['Notification']['sObject']['readerEvent__c'] : 'null';
				$RecordType = isset($fdata['Notification']['sObject']['RecordType']) ? $fdata['Notification']['sObject']['RecordType'] : 'null';
				$Responce_JSON__c = isset($fdata['Notification']['sObject']['Responce_JSON__c']) ? $fdata['Notification']['sObject']['Responce_JSON__c'] : 'null';
				$Service_Provider__c = isset($fdata['Notification']['sObject']['Service_Provider__c']) ? $fdata['Notification']['sObject']['Service_Provider__c'] : 'null';
				$SFDC_Container_Asset__c = isset($fdata['Notification']['sObject']['SFDC_Container_Asset__c']) ? $fdata['Notification']['sObject']['SFDC_Container_Asset__c'] : 'null';
				$SFDC_Device_Id__c = isset($fdata['Notification']['sObject']['SFDC_Device_Id__c']) ? $fdata['Notification']['sObject']['SFDC_Device_Id__c'] : 'null';
				$SFDC_Truck_ID__c = isset($fdata['Notification']['sObject']['SFDC_Truck_ID__c']) ? $fdata['Notification']['sObject']['SFDC_Truck_ID__c'] : 'null';
				$SpeedingInsyncId__c = isset($fdata['Notification']['sObject']['SpeedingInsyncId__c']) ? $fdata['Notification']['sObject']['SpeedingInsyncId__c'] : 'null';
				$State__c = isset($fdata['Notification']['sObject']['State__c']) ? $fdata['Notification']['sObject']['State__c'] : 'null';
				$Street__c = isset($fdata['Notification']['sObject']['Street__c']) ? $fdata['Notification']['sObject']['Street__c'] : 'null';
				$Telematic_Event_Date__c = isset($fdata['Notification']['sObject']['Telematic_Event_Date__c']) ? $fdata['Notification']['sObject']['Telematic_Event_Date__c'] : 'null';
				$Timezone__c = isset($fdata['Notification']['sObject']['Timezone__c']) ? $fdata['Notification']['sObject']['Timezone__c'] : 'null';
				$TipNoTipNumber__c = isset($fdata['Notification']['sObject']['TipNoTipNumber__c']) ? $fdata['Notification']['sObject']['TipNoTipNumber__c'] : 'null';
				$Tip_DateTime__c = isset($fdata['Notification']['sObject']['Tip_DateTime__c']) ? $fdata['Notification']['sObject']['Tip_DateTime__c'] : 'null';
				$Tip_Date_Time__c = isset($fdata['Notification']['sObject']['Tip_Date_Time__c']) ? $fdata['Notification']['sObject']['Tip_Date_Time__c'] : 'null';
				$Tip_Date__c = isset($fdata['Notification']['sObject']['Tip_Date__c']) ? $fdata['Notification']['sObject']['Tip_Date__c'] : 'null';
				$Tip_hour_range__c = isset($fdata['Notification']['sObject']['Tip_hour_range__c']) ? $fdata['Notification']['sObject']['Tip_hour_range__c'] : 'null';
				$Tip_Hour__c = isset($fdata['Notification']['sObject']['Tip_Hour__c']) ? $fdata['Notification']['sObject']['Tip_Hour__c'] : 'null';
				$Tip_Lat_Lon__Latitude__s = isset($fdata['Notification']['sObject']['Tip_Lat_Lon__Latitude__s']) ? $fdata['Notification']['sObject']['Tip_Lat_Lon__Latitude__s'] : 'null';
				$Tip_Lat_Lon__Longitude__s = isset($fdata['Notification']['sObject']['Tip_Lat_Lon__Longitude__s']) ? $fdata['Notification']['sObject']['Tip_Lat_Lon__Longitude__s'] : 'null';
				$Tip_or_Non_Tip__c = isset($fdata['Notification']['sObject']['Tip_or_Non_Tip__c']) ? $fdata['Notification']['sObject']['Tip_or_Non_Tip__c'] : 'null';
				$Truck_No__c = isset($fdata['Notification']['sObject']['Truck_No__c']) ? $fdata['Notification']['sObject']['Truck_No__c'] : 'null';
				$Truck_Type__c = isset($fdata['Notification']['sObject']['Truck_Type__c']) ? $fdata['Notification']['sObject']['Truck_Type__c'] : 'null';
				$Zip_Code__c = isset($fdata['Notification']['sObject']['Zip_Code__c']) ? $fdata['Notification']['sObject']['Zip_Code__c'] : 'null';
			
			$query ="INSERT INTO public.individual_tip_non_tip_events__c (Id, Ammout_Over_Limit_mph__c, Amount_Over_Limit_Km_h__c, Asset_Serial__c, Asset_Type__c, City__c, Collection_Route_Text__c, Collection_Route__c, Container_RFID_tag__c, Country__c, CreatedById, CreatedDate, CreatedDateOnly__c, Customer_Location__c, Distance__c, Duration__c, Error_Code__c, Error_Description__c, Event_End_Date_Time__c, Event_End__Latitude__s, Event_End__Longitude__s, Event_Start_Date_Time__c, Event_Start_Date__c , Event_Start_Tip_Date__c, Event_Start__Latitude__s, Event_Start__Longitude__s, HarshAcceleration__c, HarshBrakingInsyncId__c, Heading__c, HeartbeatInsyncId__c, House_Number__c, IdleTimeInsyncId__c, InsyncId__c, IsDeleted, IsLatestTip__c, Is_GPS_Location__c, Is_Tipped_Twice__c, Is_Tip_Mismatched__c, Is_Viewable_On_Map__c, LastModifiedById, LastModifiedDate, LastReferencedDate, LastViewedDate, Location_Address__c, Max_Speed_Miles_per_hour__c, Name, ObservationInsyncId__c, Observation_Description__c, Observation_Number__c, Obs_Num_Desc__c, OwnerId, readerEvent__c, RecordTypeId, Responce_JSON__c, Service_Provider__c, SFDC_Container_Asset__c, SFDC_Device_Id__c, SFDC_Truck_ID__c, SpeedingInsyncId__c, State__c, Street__c, Telematic_Event_Date__c, Timezone__c, TipNoTipNumber__c, Tip_DateTime__c, Tip_Date_Time__c, Tip_Date__c, Tip_hour_range__c, Tip_Hour__c, Tip_Lat_Lon__Latitude__s, Tip_Lat_Lon__Longitude__s, Tip_or_Non_Tip__c, Truck_No__c, Truck_Type__c, Zip_Code__c) VALUES ('".$Id."','".$Ammout_Over_Limit_mph__c."','".$Amount_Over_Limit_Km_h__c."','".$Asset_Serial__c."','".$Asset_Type__c."','".$City__c."','".$Collection_Route_Text__c."','".$Collection_Route__c."','".$Container_RFID_tag__c."','".$Country__c."','".$CreatedById."','".$CreatedDate."','".$CreatedDateOnly__c."','".$Customer_Location__c."','".$Distance__c."','".$Duration__c."','".$Error_Code__c."','".$Error_Description__c."','".$Event_End_Date_Time__c."','".$Event_End__Latitude__s."','".$Event_End__Longitude__s."','".$Event_Start_Date_Time__c."','".$Event_Start_Date__c ."','".$Event_Start_Tip_Date__c."','".$Event_Start__Latitude__s."','".$Event_Start__Longitude__s."','".$HarshAcceleration__c."','".$HarshBrakingInsyncId__c."','".$Heading__c."','".$HeartbeatInsyncId__c."','".$House_Number__c."','".$IdleTimeInsyncId__c."','".$InsyncId__c."','".$IsDeleted."','".$IsLatestTip__c."','".$Is_GPS_Location__c."','".$Is_Tipped_Twice__c."','".$Is_Tip_Mismatched__c."','".$Is_Viewable_On_Map__c."','".$LastModifiedById."','".$LastModifiedDate."','".$LastReferencedDate."','".$LastViewedDate."','".$Location_Address__c."','".$Max_Speed_Miles_per_hour__c."','".$Name."','".$ObservationInsyncId__c."','".$Observation_Description__c."','".$Observation_Number__c."','".$Obs_Num_Desc__c."','".$OwnerId."','".$readerEvent__c."','".$RecordTypeId."','".$Responce_JSON__c."','".$Service_Provider__c."','".$SFDC_Container_Asset__c."','".$SFDC_Device_Id__c."','".$SFDC_Truck_ID__c."','".$SpeedingInsyncId__c."','".$State__c."','".$Street__c."','".$Telematic_Event_Date__c."','".$Timezone__c."','".$TipNoTipNumber__c."','".$Tip_DateTime__c."','".$Tip_Date_Time__c."','".$Tip_Date__c."','".$Tip_hour_range__c."','".$Tip_Hour__c."','".$Tip_Lat_Lon__Latitude__s."','".$Tip_Lat_Lon__Longitude__s."','".$Tip_or_Non_Tip__c."','".$Truck_No__c."','".$Truck_Type__c."','".$Zip_Code__c."')";
			$queryRecordsSingle = pg_query($conn, $query) or die("error to save  data");
				if(!empty($queryRecordsSingle)){
					$XML = '<?xml version="1.0" encoding="utf-8"?><soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"><soapenv:Body><notificationsResponse xmlns="http://soap.sforce.com/2005/09/outbound"><Ack>true</Ack></notificationsResponse></soapenv:Body></soapenv:Envelope>';
				}else{
					$XML = '<?xml version="1.0" encoding="utf-8"?><soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"><soapenv:Body><notificationsResponse xmlns="http://soap.sforce.com/2005/09/outbound"><Ack>true</Ack></notificationsResponse></soapenv:Body></soapenv:Envelope>';
				}
			}
				
		}else{ //for mulitple records
		
			foreach($val['notifications']['Notification'] as $fdata){
				
				$Id = isset($fdata['sObject']['Id']) ? $fdata['sObject']['Id'] : 'null';
				$Ammout_Over_Limit_mph__c = isset($fdata['sObject']['Ammout_Over_Limit_mph__c']) ? $fdata['sObject']['Ammout_Over_Limit_mph__c'] : 'null';
				$Amount_Over_Limit_Km_h__c = isset($fdata['sObject']['Amount_Over_Limit_Km_h__c']) ? $fdata['sObject']['Amount_Over_Limit_Km_h__c'] : 'null';
				$Asset_Serial__c = isset($fdata['sObject']['Asset_Serial__c']) ? $fdata['sObject']['Asset_Serial__c'] : 'null';
				$Asset_Type__c = isset($fdata['sObject']['Asset_Type__c']) ? $fdata['sObject']['Asset_Type__c'] : 'null';
				$City__c = isset($fdata['sObject']['City__c']) ? $fdata['sObject']['City__c'] : 'null';
				$Collection_Route_Text__c = isset($fdata['sObject']['Collection_Route_Text__c']) ? $fdata['sObject']['Collection_Route_Text__c'] : 'null';
				$Collection_Route__c = isset($fdata['sObject']['Collection_Route__c']) ? $fdata['sObject']['Collection_Route__c'] : 'null';
				$Container_RFID_tag__c = isset($fdata['sObject']['Container_RFID_tag__c']) ? $fdata['sObject']['Container_RFID_tag__c'] : 'null';
				$Country__c = isset($fdata['sObject']['Country__c']) ? $fdata['sObject']['Country__c'] : 'null';
				$CreatedById = isset($fdata['sObject']['CreatedById']) ? $fdata['sObject']['CreatedById'] : 'null';
				$CreatedDate = isset($fdata['sObject']['CreatedDate']) ? $fdata['sObject']['CreatedDate'] : 'null';
				$CreatedDateOnly__c = isset($fdata['sObject']['CreatedDateOnly__c']) ? $fdata['sObject']['CreatedDateOnly__c'] : 'null';
				$Customer_Location__c = isset($fdata['sObject']['Customer_Location__c']) ? $fdata['sObject']['Customer_Location__c'] : 'null';
				$Distance__c = isset($fdata['sObject']['Distance__c']) ? $fdata['sObject']['Distance__c'] : 'null';
				$Duration__c = isset($fdata['sObject']['Duration__c']) ? $fdata['sObject']['Duration__c'] : 'null';
				$Error_Code__c = isset($fdata['sObject']['Error_Code__c']) ? $fdata['sObject']['Error_Code__c'] : 'null';
				$Error_Description__c = isset($fdata['sObject']['Error_Description__c']) ? $fdata['sObject']['Error_Description__c'] : 'null';
				$Event_End_Date_Time__c = isset($fdata['sObject']['Event_End_Date_Time__c']) ? $fdata['sObject']['Event_End_Date_Time__c'] : 'null';
				$Event_End__Latitude__s = isset($fdata['sObject']['Event_End__Latitude__s']) ? $fdata['sObject']['Event_End__Latitude__s'] : 'null';
				$Event_End__Longitude__s = isset($fdata['sObject']['Event_End__Longitude__s']) ? $fdata['sObject']['Event_End__Longitude__s'] : 'null';
				$Event_Start_Date_Time__c = isset($fdata['sObject']['Event_Start_Date_Time__c']) ? $fdata['sObject']['Event_Start_Date_Time__c'] : 'null';
				$Event_Start_Date__c = isset($fdata['sObject']['Event_Start_Date__c']) ? $fdata['sObject']['Event_Start_Date__c'] : 'null';
				$Event_Start_Tip_Date__c = isset($fdata['sObject']['Event_Start_Tip_Date__c']) ? $fdata['sObject']['Event_Start_Tip_Date__c'] : 'null';				
				$Event_Start__Latitude__s = isset($fdata['sObject']['Event_Start__Latitude__s']) ? $fdata['sObject']['Event_Start__Latitude__s'] : 'null';
				$Event_Start__Longitude__s = isset($fdata['sObject']['Event_Start__Longitude__s']) ? $fdata['sObject']['Event_Start__Longitude__s'] : 'null';
				$HarshAcceleration__c = isset($fdata['sObject']['HarshAcceleration__c']) ? $fdata['sObject']['HarshAcceleration__c'] : 'null';
				$HarshBrakingInsyncId__c = isset($fdata['sObject']['HarshBrakingInsyncId__c']) ? $fdata['sObject']['HarshBrakingInsyncId__c'] : 'null';
				$Heading__c = isset($fdata['sObject']['Heading__c']) ? $fdata['sObject']['Heading__c'] : 'null';
				$HeartbeatInsyncId__c = isset($fdata['sObject']['HeartbeatInsyncId__c']) ? $fdata['sObject']['HeartbeatInsyncId__c'] : 'null';
				$House_Number__c = isset($fdata['sObject']['House_Number__c']) ? $fdata['sObject']['House_Number__c'] : 'null';
				$IdleTimeInsyncId__c = isset($fdata['sObject']['IdleTimeInsyncId__c']) ? $fdata['sObject']['IdleTimeInsyncId__c'] : 'null';
				$InsyncId__c = isset($fdata['sObject']['InsyncId__c']) ? $fdata['sObject']['InsyncId__c'] : 'null';
				$IsDeleted = isset($fdata['sObject']['IsDeleted']) ? $fdata['sObject']['IsDeleted'] : 'null';
				$IsLatestTip__c = isset($fdata['sObject']['IsLatestTip__c']) ? $fdata['sObject']['IsLatestTip__c'] : 'null';
				$Is_GPS_Location__c = isset($fdata['sObject']['Is_GPS_Location__c']) ? $fdata['sObject']['Is_GPS_Location__c'] : 'null';
				$Is_Tipped_Twice__c = isset($fdata['sObject']['Is_Tipped_Twice__c']) ? $fdata['sObject']['Is_Tipped_Twice__c'] : 'null';
				$Is_Tip_Mismatched__c = isset($fdata['sObject']['Is_Tip_Mismatched__c']) ? $fdata['sObject']['Is_Tip_Mismatched__c'] : 'null';
				$Is_Viewable_On_Map__c = isset($fdata['sObject']['Is_Viewable_On_Map__c']) ? $fdata['sObject']['Is_Viewable_On_Map__c'] : 'null';
				$LastModifiedById = isset($fdata['sObject']['LastModifiedById']) ? $fdata['sObject']['LastModifiedById'] : 'null';
				$LastModifiedDate = isset($fdata['sObject']['LastModifiedDate']) ? $fdata['sObject']['LastModifiedDate'] : 'null';
				$LastReferencedDate = isset($fdata['sObject']['LastReferencedDate']) ? $fdata['sObject']['LastReferencedDate'] : 'null';
				$LastViewedDate = isset($fdata['sObject']['LastViewedDate']) ? $fdata['sObject']['LastViewedDate'] : 'null';	
				$Location_Address__c = isset($fdata['sObject']['Location_Address__c']) ? $fdata['sObject']['Location_Address__c'] : 'null';
				$Max_Speed_Miles_per_hour__c = isset($fdata['sObject']['Max_Speed_Miles_per_hour__c']) ? $fdata['sObject']['Max_Speed_Miles_per_hour__c'] : 'null';
				$Name = isset($fdata['sObject']['Name']) ? $fdata['sObject']['Name'] : 'null';
				$ObservationInsyncId__c = isset($fdata['sObject']['ObservationInsyncId__c']) ? $fdata['sObject']['ObservationInsyncId__c'] : 'null';
				$Observation_Description__c = isset($fdata['sObject']['Observation_Description__c']) ? $fdata['sObject']['Observation_Description__c'] : 'null';
				$Observation_Number__c = isset($fdata['sObject']['Observation_Number__c']) ? $fdata['sObject']['Observation_Number__c'] : 'null';
				$Obs_Num_Desc__c = isset($fdata['sObject']['Obs_Num_Desc__c']) ? $fdata['sObject']['Obs_Num_Desc__c'] : 'null';
				$OwnerId = isset($fdata['sObject']['OwnerId']) ? $fdata['sObject']['OwnerId'] : 'null';
				$readerEvent__c = isset($fdata['sObject']['readerEvent__c']) ? $fdata['sObject']['readerEvent__c'] : 'null';
				$RecordType = isset($fdata['sObject']['RecordType']) ? $fdata['sObject']['RecordType'] : 'null';
				$Responce_JSON__c = isset($fdata['sObject']['Responce_JSON__c']) ? $fdata['sObject']['Responce_JSON__c'] : 'null';
				$Service_Provider__c = isset($fdata['sObject']['Service_Provider__c']) ? $fdata['sObject']['Service_Provider__c'] : 'null';
				$SFDC_Container_Asset__c = isset($fdata['sObject']['SFDC_Container_Asset__c']) ? $fdata['sObject']['SFDC_Container_Asset__c'] : 'null';
				$SFDC_Device_Id__c = isset($fdata['sObject']['SFDC_Device_Id__c']) ? $fdata['sObject']['SFDC_Device_Id__c'] : 'null';
				$SFDC_Truck_ID__c = isset($fdata['sObject']['SFDC_Truck_ID__c']) ? $fdata['sObject']['SFDC_Truck_ID__c'] : 'null';
				$SpeedingInsyncId__c = isset($fdata['sObject']['SpeedingInsyncId__c']) ? $fdata['sObject']['SpeedingInsyncId__c'] : 'null';
				$State__c = isset($fdata['sObject']['State__c']) ? $fdata['sObject']['State__c'] : 'null';
				$Street__c = isset($fdata['sObject']['Street__c']) ? $fdata['sObject']['Street__c'] : 'null';
				$Telematic_Event_Date__c = isset($fdata['sObject']['Telematic_Event_Date__c']) ? $fdata['sObject']['Telematic_Event_Date__c'] : 'null';
				$Timezone__c = isset($fdata['sObject']['Timezone__c']) ? $fdata['sObject']['Timezone__c'] : 'null';
				$TipNoTipNumber__c = isset($fdata['sObject']['TipNoTipNumber__c']) ? $fdata['sObject']['TipNoTipNumber__c'] : 'null';
				$Tip_DateTime__c = isset($fdata['sObject']['Tip_DateTime__c']) ? $fdata['sObject']['Tip_DateTime__c'] : 'null';
				$Tip_Date_Time__c = isset($fdata['sObject']['Tip_Date_Time__c']) ? $fdata['sObject']['Tip_Date_Time__c'] : 'null';
				$Tip_Date__c = isset($fdata['sObject']['Tip_Date__c']) ? $fdata['sObject']['Tip_Date__c'] : 'null';
				$Tip_hour_range__c = isset($fdata['sObject']['Tip_hour_range__c']) ? $fdata['sObject']['Tip_hour_range__c'] : 'null';
				$Tip_Hour__c = isset($fdata['sObject']['Tip_Hour__c']) ? $fdata['sObject']['Tip_Hour__c'] : 'null';
				$Tip_Lat_Lon__Latitude__s = isset($fdata['sObject']['Tip_Lat_Lon__Latitude__s']) ? $fdata['sObject']['Tip_Lat_Lon__Latitude__s'] : 'null';
				$Tip_Lat_Lon__Longitude__s = isset($fdata['sObject']['Tip_Lat_Lon__Longitude__s']) ? $fdata['sObject']['Tip_Lat_Lon__Longitude__s'] : 'null';
				$Tip_or_Non_Tip__c = isset($fdata['sObject']['Tip_or_Non_Tip__c']) ? $fdata['sObject']['Tip_or_Non_Tip__c'] : 'null';
				$Truck_No__c = isset($fdata['sObject']['Truck_No__c']) ? $fdata['sObject']['Truck_No__c'] : 'null';
				$Truck_Type__c = isset($fdata['sObject']['Truck_Type__c']) ? $fdata['sObject']['Truck_Type__c'] : 'null';
				$Zip_Code__c = isset($fdata['sObject']['Zip_Code__c']) ? $fdata['sObject']['Zip_Code__c'] : 'null';
			
			$query ="INSERT INTO public.individual_tip_non_tip_events__c (Id, Ammout_Over_Limit_mph__c, Amount_Over_Limit_Km_h__c, Asset_Serial__c, Asset_Type__c, City__c, Collection_Route_Text__c, Collection_Route__c, Container_RFID_tag__c, Country__c, CreatedById, CreatedDate, CreatedDateOnly__c, Customer_Location__c, Distance__c, Duration__c, Error_Code__c, Error_Description__c, Event_End_Date_Time__c, Event_End__Latitude__s, Event_End__Longitude__s, Event_Start_Date_Time__c, Event_Start_Date__c , Event_Start_Tip_Date__c, Event_Start__Latitude__s, Event_Start__Longitude__s, HarshAcceleration__c, HarshBrakingInsyncId__c, Heading__c, HeartbeatInsyncId__c, House_Number__c, IdleTimeInsyncId__c, InsyncId__c, IsDeleted, IsLatestTip__c, Is_GPS_Location__c, Is_Tipped_Twice__c, Is_Tip_Mismatched__c, Is_Viewable_On_Map__c, LastModifiedById, LastModifiedDate, LastReferencedDate, LastViewedDate, Location_Address__c, Max_Speed_Miles_per_hour__c, Name, ObservationInsyncId__c, Observation_Description__c, Observation_Number__c, Obs_Num_Desc__c, OwnerId, readerEvent__c, RecordTypeId, Responce_JSON__c, Service_Provider__c, SFDC_Container_Asset__c, SFDC_Device_Id__c, SFDC_Truck_ID__c, SpeedingInsyncId__c, State__c, Street__c, Telematic_Event_Date__c, Timezone__c, TipNoTipNumber__c, Tip_DateTime__c, Tip_Date_Time__c, Tip_Date__c, Tip_hour_range__c, Tip_Hour__c, Tip_Lat_Lon__Latitude__s, Tip_Lat_Lon__Longitude__s, Tip_or_Non_Tip__c, Truck_No__c, Truck_Type__c, Zip_Code__c) VALUES ('".$Id."','".$Ammout_Over_Limit_mph__c."','".$Amount_Over_Limit_Km_h__c."','".$Asset_Serial__c."','".$Asset_Type__c."','".$City__c."','".$Collection_Route_Text__c."','".$Collection_Route__c."','".$Container_RFID_tag__c."','".$Country__c."','".$CreatedById."','".$CreatedDate."','".$CreatedDateOnly__c."','".$Customer_Location__c."','".$Distance__c."','".$Duration__c."','".$Error_Code__c."','".$Error_Description__c."','".$Event_End_Date_Time__c."','".$Event_End__Latitude__s."','".$Event_End__Longitude__s."','".$Event_Start_Date_Time__c."','".$Event_Start_Date__c ."','".$Event_Start_Tip_Date__c."','".$Event_Start__Latitude__s."','".$Event_Start__Longitude__s."','".$HarshAcceleration__c."','".$HarshBrakingInsyncId__c."','".$Heading__c."','".$HeartbeatInsyncId__c."','".$House_Number__c."','".$IdleTimeInsyncId__c."','".$InsyncId__c."','".$IsDeleted."','".$IsLatestTip__c."','".$Is_GPS_Location__c."','".$Is_Tipped_Twice__c."','".$Is_Tip_Mismatched__c."','".$Is_Viewable_On_Map__c."','".$LastModifiedById."','".$LastModifiedDate."','".$LastReferencedDate."','".$LastViewedDate."','".$Location_Address__c."','".$Max_Speed_Miles_per_hour__c."','".$Name."','".$ObservationInsyncId__c."','".$Observation_Description__c."','".$Observation_Number__c."','".$Obs_Num_Desc__c."','".$OwnerId."','".$readerEvent__c."','".$RecordTypeId."','".$Responce_JSON__c."','".$Service_Provider__c."','".$SFDC_Container_Asset__c."','".$SFDC_Device_Id__c."','".$SFDC_Truck_ID__c."','".$SpeedingInsyncId__c."','".$State__c."','".$Street__c."','".$Telematic_Event_Date__c."','".$Timezone__c."','".$TipNoTipNumber__c."','".$Tip_DateTime__c."','".$Tip_Date_Time__c."','".$Tip_Date__c."','".$Tip_hour_range__c."','".$Tip_Hour__c."','".$Tip_Lat_Lon__Latitude__s."','".$Tip_Lat_Lon__Longitude__s."','".$Tip_or_Non_Tip__c."','".$Truck_No__c."','".$Truck_Type__c."','".$Zip_Code__c."')";
			$queryRecords = pg_query($conn, $query) or die("error to save  data");
			if(!empty($queryRecords)){
				$XML = '<?xml version="1.0" encoding="utf-8"?><soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"><soapenv:Body><notificationsResponse xmlns="http://soap.sforce.com/2005/09/outbound"><Ack>true</Ack></notificationsResponse></soapenv:Body></soapenv:Envelope>';
			}else{
				$XML = '<?xml version="1.0" encoding="utf-8"?><soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"><soapenv:Body><notificationsResponse xmlns="http://soap.sforce.com/2005/09/outbound"><Ack>true</Ack></notificationsResponse></soapenv:Body></soapenv:Envelope>';
			}
			 
			}
		}
		header('Content-type: text/xml');
	    echo $XML;
		}
	}else{
			$XML = '<?xml version="1.0" encoding="utf-8"?><soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"><soapenv:Body><notificationsResponse xmlns="http://soap.sforce.com/2005/09/outbound"><Ack>true</Ack></notificationsResponse></soapenv:Body></soapenv:Envelope>';
			header('Content-type: text/xml');
	        echo $XML;
		}

     /*
       Function Name : object_to_array
       Params : 
       Description :for convert object to array
      */
		function object_to_array($data) 
			{
			if ((! is_array($data)) and (! is_object($data))) return 'no_record'; //$data;

			$result = array();

			$data = (array) $data;
			foreach ($data as $key => $value) {
				if (is_object($value)) $value = (array) $value;
				if (is_array($value)) 
				$result[$key] = object_to_array($value);
				else
					$result[$key] = $value;
			}

			return $result;
			}
 ?>

