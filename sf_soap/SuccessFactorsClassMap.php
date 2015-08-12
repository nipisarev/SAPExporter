<?php
/**
 * File for the class which returns the class map definition
 * @package SuccessFactors
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
/**
 * Class which returns the class map definition by the static method SuccessFactorsClassMap::classMap()
 * @package SuccessFactors
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
class SuccessFactorsClassMap
{
	/**
	 * This method returns the array containing the mapping between WSDL structs and generated classes
	 * This array is sent to the SoapClient when calling the WS
	 * @return array
	 */
	final public static function classMap()
	{
		return array (
  'BusinessKeys' => 'SuccessFactorsStructBusinessKeys',
  'DeleteResult' => 'SuccessFactorsStructDeleteResult',
  'DescribeExResult' => 'SuccessFactorsStructDescribeExResult',
  'DescribeResult' => 'SuccessFactorsStructDescribeResult',
  'EntityInfo' => 'SuccessFactorsStructEntityInfo',
  'Error' => 'SuccessFactorsStructError',
  'Field' => 'SuccessFactorsStructField',
  'FieldEx' => 'SuccessFactorsStructFieldEx',
  'InsertResult' => 'SuccessFactorsStructInsertResult',
  'Label' => 'SuccessFactorsStructLabel',
  'LoginResult' => 'SuccessFactorsStructLoginResult',
  'ObjectEditResult' => 'SuccessFactorsStructObjectEditResult',
  'Picklist' => 'SuccessFactorsStructPicklist',
  'PicklistOption' => 'SuccessFactorsStructPicklistOption',
  'QueryResult' => 'SuccessFactorsStructQueryResult',
  'SFCredential' => 'SuccessFactorsStructSFCredential',
  'SFObject' => 'SuccessFactorsStructSFObject',
  'SFParameter' => 'SuccessFactorsStructSFParameter',
  'SFWebServiceFaultException' => 'SuccessFactorsStructSFWebServiceFaultException',
  'TaskResultStatus' => 'SuccessFactorsStructTaskResultStatus',
  'TaskResultStatusEnum' => 'SuccessFactorsEnumTaskResultStatusEnum',
  'TaskStatus' => 'SuccessFactorsStructTaskStatus',
  'TaskStatusEnum' => 'SuccessFactorsEnumTaskStatusEnum',
  'UpdateResult' => 'SuccessFactorsStructUpdateResult',
  'UpsertResult' => 'SuccessFactorsStructUpsertResult',
  'cancelJob' => 'SuccessFactorsStructCancelJob',
  'cancelJobResponse' => 'SuccessFactorsStructCancelJobResponse',
  'dataType' => 'SuccessFactorsEnumDataType',
  'delete' => 'SuccessFactorsStructDelete',
  'deleteResponse' => 'SuccessFactorsStructDeleteResponse',
  'describeSFObjects' => 'SuccessFactorsStructDescribeSFObjects',
  'describeSFObjectsEx' => 'SuccessFactorsStructDescribeSFObjectsEx',
  'describeSFObjectsExResponse' => 'SuccessFactorsStructDescribeSFObjectsExResponse',
  'describeSFObjectsResponse' => 'SuccessFactorsStructDescribeSFObjectsResponse',
  'featureType' => 'SuccessFactorsEnumFeatureType',
  'getJobResult' => 'SuccessFactorsStructGetJobResult',
  'getJobResultEmbedded' => 'SuccessFactorsStructGetJobResultEmbedded',
  'getJobResultMTOMRQ' => 'SuccessFactorsStructGetJobResultMTOMRQ',
  'getJobResultMTOMRS' => 'SuccessFactorsStructGetJobResultMTOMRS',
  'getJobStatus' => 'SuccessFactorsStructGetJobStatus',
  'getJobStatusResponse' => 'SuccessFactorsStructGetJobStatusResponse',
  'insert' => 'SuccessFactorsStructInsert',
  'insertResponse' => 'SuccessFactorsStructInsertResponse',
  'isValidSession' => 'SuccessFactorsStructIsValidSession',
  'isValidSessionResponse' => 'SuccessFactorsStructIsValidSessionResponse',
  'listJobs' => 'SuccessFactorsStructListJobs',
  'listJobsResponse' => 'SuccessFactorsStructListJobsResponse',
  'listSFObjects' => 'SuccessFactorsStructListSFObjects',
  'listSFObjectsResponse' => 'SuccessFactorsStructListSFObjectsResponse',
  'login' => 'SuccessFactorsStructLogin',
  'loginResponse' => 'SuccessFactorsStructLoginResponse',
  'logout' => 'SuccessFactorsStructLogout',
  'logoutResponse' => 'SuccessFactorsStructLogoutResponse',
  'query' => 'SuccessFactorsStructQuery',
  'queryMore' => 'SuccessFactorsStructQueryMore',
  'queryMoreResponse' => 'SuccessFactorsStructQueryMoreResponse',
  'queryResponse' => 'SuccessFactorsStructQueryResponse',
  'submitQueryJob' => 'SuccessFactorsStructSubmitQueryJob',
  'submitQueryJobResponse' => 'SuccessFactorsStructSubmitQueryJobResponse',
  'update' => 'SuccessFactorsStructUpdate',
  'updateResponse' => 'SuccessFactorsStructUpdateResponse',
  'upsert' => 'SuccessFactorsStructUpsert',
  'upsertResponse' => 'SuccessFactorsStructUpsertResponse',
);
	}
}
?>