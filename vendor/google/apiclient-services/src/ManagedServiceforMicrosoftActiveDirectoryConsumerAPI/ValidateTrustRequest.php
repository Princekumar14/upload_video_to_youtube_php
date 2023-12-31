<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\ManagedServiceforMicrosoftActiveDirectoryConsumerAPI;

class ValidateTrustRequest extends \Google\Model
{
  /**
   * @var Trust
   */
  public $trust;
  protected $trustType = Trust::class;
  protected $trustDataType = '';

  /**
   * @param Trust
   */
  public function setTrust(Trust $trust)
  {
    $this->trust = $trust;
  }
  /**
   * @return Trust
   */
  public function getTrust()
  {
    return $this->trust;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ValidateTrustRequest::class, 'Google_Service_ManagedServiceforMicrosoftActiveDirectoryConsumerAPI_ValidateTrustRequest');
