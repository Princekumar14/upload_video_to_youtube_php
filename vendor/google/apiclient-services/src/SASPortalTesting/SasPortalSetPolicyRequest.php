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

namespace Google\Service\SASPortalTesting;

class SasPortalSetPolicyRequest extends \Google\Model
{
  /**
   * @var bool
   */
  public $disableNotification;
  /**
   * @var SasPortalPolicy
   */
  public $policy;
  protected $policyType = SasPortalPolicy::class;
  protected $policyDataType = '';
  /**
   * @var string
   */
  public $resource;

  /**
   * @param bool
   */
  public function setDisableNotification($disableNotification)
  {
    $this->disableNotification = $disableNotification;
  }
  /**
   * @return bool
   */
  public function getDisableNotification()
  {
    return $this->disableNotification;
  }
  /**
   * @param SasPortalPolicy
   */
  public function setPolicy(SasPortalPolicy $policy)
  {
    $this->policy = $policy;
  }
  /**
   * @return SasPortalPolicy
   */
  public function getPolicy()
  {
    return $this->policy;
  }
  /**
   * @param string
   */
  public function setResource($resource)
  {
    $this->resource = $resource;
  }
  /**
   * @return string
   */
  public function getResource()
  {
    return $this->resource;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SasPortalSetPolicyRequest::class, 'Google_Service_SASPortalTesting_SasPortalSetPolicyRequest');
