<?php

Import::php("OpenM-Services.api.OpenM_Service");

/**
 *
 * @package OpenM  
 * @subpackage OpenM\OpenM-Book\api 
 * @license http://www.apache.org/licenses/LICENSE-2.0 Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *     http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * @link http://www.open-miage.org
 * @author Gaël Saunier
 */
interface OpenM_Book_Const extends OpenM_Service {
    
    const RETURN_ERROR_MESSAGE_USER_NOT_REGISTERED_VALUE = "you're not registered";
    const RETURN_ERROR_MESSAGE_USER_NOT_FOUND_VALUE = "user not found";    
    const RETURN_ERROR_MESSAGE_GROUP_NOT_FOUND_VALUE = "group not found";
    
    const RETURN_USER_LIST_PARAMETER = "USER_LIST";
    const RETURN_USER_ID_PARAMETER = "ID";
    
    const USER_ID_PARAMETER_PATERN = "/^[1-9][0-9]*$/";
    const GROUP_ID_PARAMETER_PATERN = "/^[1-9][0-9]*$/";
    const ID_PARAMETER_PATERN = "/^[1-9][0-9]*$/";
}

?>
