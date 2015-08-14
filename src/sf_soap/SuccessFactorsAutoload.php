<?php
/**
 * File to load generated classes once at once time
 * @package SuccessFactors
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
/**
 * Includes for all generated classes files
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20130813-01
 * @date 2013-08-26
 */
require_once dirname(__FILE__) . '/SuccessFactorsWsdlClass.php';
require_once dirname(__FILE__) . '/Update/Response/SuccessFactorsStructUpdateResponse.php';
require_once dirname(__FILE__) . '/Update/SuccessFactorsStructUpdate.php';
require_once dirname(__FILE__) . '/Upsert/SuccessFactorsStructUpsert.php';
require_once dirname(__FILE__) . '/Upsert/Response/SuccessFactorsStructUpsertResponse.php';
require_once dirname(__FILE__) . '/Delete/Response/SuccessFactorsStructDeleteResponse.php';
require_once dirname(__FILE__) . '/Delete/SuccessFactorsStructDelete.php';
require_once dirname(__FILE__) . '/Insert/Response/SuccessFactorsStructInsertResponse.php';
require_once dirname(__FILE__) . '/Insert/SuccessFactorsStructInsert.php';
require_once dirname(__FILE__) . '/Describe/Response/SuccessFactorsStructDescribeSFObjectsExResponse.php';
require_once dirname(__FILE__) . '/Describe/Response/SuccessFactorsStructDescribeSFObjectsResponse.php';
require_once dirname(__FILE__) . '/Query/SuccessFactorsStructQuery.php';
require_once dirname(__FILE__) . '/Query/Response/SuccessFactorsStructQueryResponse.php';
require_once dirname(__FILE__) . '/Query/Response/SuccessFactorsStructQueryMoreResponse.php';
require_once dirname(__FILE__) . '/Query/More/SuccessFactorsStructQueryMore.php';
require_once dirname(__FILE__) . '/Task/Enum/SuccessFactorsEnumTaskResultStatusEnum.php';
require_once dirname(__FILE__) . '/Task/Status/SuccessFactorsStructTaskResultStatus.php';
require_once dirname(__FILE__) . '/Get/Response/SuccessFactorsStructGetJobStatusResponse.php';
require_once dirname(__FILE__) . '/Get/Status/SuccessFactorsStructGetJobStatus.php';
require_once dirname(__FILE__) . '/List/Jobs/SuccessFactorsStructListJobs.php';
require_once dirname(__FILE__) . '/List/Response/SuccessFactorsStructListJobsResponse.php';
require_once dirname(__FILE__) . '/Cancel/Response/SuccessFactorsStructCancelJobResponse.php';
require_once dirname(__FILE__) . '/Cancel/Job/SuccessFactorsStructCancelJob.php';
require_once dirname(__FILE__) . '/Get/MTOMRS/SuccessFactorsStructGetJobResultMTOMRS.php';
require_once dirname(__FILE__) . '/Get/MTOMRQ/SuccessFactorsStructGetJobResultMTOMRQ.php';
require_once dirname(__FILE__) . '/Task/Status/SuccessFactorsStructTaskStatus.php';
require_once dirname(__FILE__) . '/Task/Enum/SuccessFactorsEnumTaskStatusEnum.php';
require_once dirname(__FILE__) . '/Submit/Job/SuccessFactorsStructSubmitQueryJob.php';
require_once dirname(__FILE__) . '/Submit/Response/SuccessFactorsStructSubmitQueryJobResponse.php';
require_once dirname(__FILE__) . '/Get/Embedded/SuccessFactorsStructGetJobResultEmbedded.php';
require_once dirname(__FILE__) . '/Get/Result/SuccessFactorsStructGetJobResult.php';
require_once dirname(__FILE__) . '/Describe/Ex/SuccessFactorsStructDescribeSFObjectsEx.php';
require_once dirname(__FILE__) . '/Describe/Objects/SuccessFactorsStructDescribeSFObjects.php';
require_once dirname(__FILE__) . '/Field/SuccessFactorsStructField.php';
require_once dirname(__FILE__) . '/Picklist/SuccessFactorsStructPicklist.php';
require_once dirname(__FILE__) . '/Field/Ex/SuccessFactorsStructFieldEx.php';
require_once dirname(__FILE__) . '/Entity/Info/SuccessFactorsStructEntityInfo.php';
require_once dirname(__FILE__) . '/Describe/Result/SuccessFactorsStructDescribeExResult.php';
require_once dirname(__FILE__) . '/Describe/Result/SuccessFactorsStructDescribeResult.php';
require_once dirname(__FILE__) . '/Picklist/Option/SuccessFactorsStructPicklistOption.php';
require_once dirname(__FILE__) . '/Label/SuccessFactorsStructLabel.php';
require_once dirname(__FILE__) . '/Data/Type/SuccessFactorsEnumDataType.php';
require_once dirname(__FILE__) . '/Feature/Type/SuccessFactorsEnumFeatureType.php';
require_once dirname(__FILE__) . '/SFC/Redential/SuccessFactorsStructSFCredential.php';
require_once dirname(__FILE__) . '/SFP/Arameter/SuccessFactorsStructSFParameter.php';
require_once dirname(__FILE__) . '/Login/Result/SuccessFactorsStructLoginResult.php';
require_once dirname(__FILE__) . '/Error/SuccessFactorsStructError.php';
require_once dirname(__FILE__) . '/Business/Keys/SuccessFactorsStructBusinessKeys.php';
require_once dirname(__FILE__) . '/SFO/Bject/SuccessFactorsStructSFObject.php';
require_once dirname(__FILE__) . '/Logout/Response/SuccessFactorsStructLogoutResponse.php';
require_once dirname(__FILE__) . '/Logout/SuccessFactorsStructLogout.php';
require_once dirname(__FILE__) . '/Is/Session/SuccessFactorsStructIsValidSession.php';
require_once dirname(__FILE__) . '/Is/Response/SuccessFactorsStructIsValidSessionResponse.php';
require_once dirname(__FILE__) . '/List/Response/SuccessFactorsStructListSFObjectsResponse.php';
require_once dirname(__FILE__) . '/List/Objects/SuccessFactorsStructListSFObjects.php';
require_once dirname(__FILE__) . '/Login/Response/SuccessFactorsStructLoginResponse.php';
require_once dirname(__FILE__) . '/Login/SuccessFactorsStructLogin.php';
require_once dirname(__FILE__) . '/Insert/Result/SuccessFactorsStructInsertResult.php';
require_once dirname(__FILE__) . '/Object/Result/SuccessFactorsStructObjectEditResult.php';
require_once dirname(__FILE__) . '/Update/Result/SuccessFactorsStructUpdateResult.php';
require_once dirname(__FILE__) . '/Upsert/Result/SuccessFactorsStructUpsertResult.php';
require_once dirname(__FILE__) . '/Delete/Result/SuccessFactorsStructDeleteResult.php';
require_once dirname(__FILE__) . '/Query/Result/SuccessFactorsStructQueryResult.php';
require_once dirname(__FILE__) . '/SFW/Exception/SuccessFactorsStructSFWebServiceFaultException.php';
require_once dirname(__FILE__) . '/Login/SuccessFactorsServiceLogin.php';
require_once dirname(__FILE__) . '/Is/SuccessFactorsServiceIs.php';
require_once dirname(__FILE__) . '/Describe/SuccessFactorsServiceDescribe.php';
require_once dirname(__FILE__) . '/Logout/SuccessFactorsServiceLogout.php';
require_once dirname(__FILE__) . '/List/SuccessFactorsServiceList.php';
require_once dirname(__FILE__) . '/Query/SuccessFactorsServiceQuery.php';
require_once dirname(__FILE__) . '/Insert/SuccessFactorsServiceInsert.php';
require_once dirname(__FILE__) . '/Update/SuccessFactorsServiceUpdate.php';
require_once dirname(__FILE__) . '/Upsert/SuccessFactorsServiceUpsert.php';
require_once dirname(__FILE__) . '/Delete/SuccessFactorsServiceDelete.php';
require_once dirname(__FILE__) . '/Submit/SuccessFactorsServiceSubmit.php';
require_once dirname(__FILE__) . '/Get/SuccessFactorsServiceGet.php';
require_once dirname(__FILE__) . '/Cancel/SuccessFactorsServiceCancel.php';
require_once dirname(__FILE__) . '/SuccessFactorsClassMap.php';
?>