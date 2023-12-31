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

namespace Google\Service\AndroidPublisher;

class SystemApksListResponse extends \Google\Collection
{
  protected $collection_key = 'variants';
  /**
   * @var Variant[]
   */
  public $variants;
  protected $variantsType = Variant::class;
  protected $variantsDataType = 'array';

  /**
   * @param Variant[]
   */
  public function setVariants($variants)
  {
    $this->variants = $variants;
  }
  /**
   * @return Variant[]
   */
  public function getVariants()
  {
    return $this->variants;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SystemApksListResponse::class, 'Google_Service_AndroidPublisher_SystemApksListResponse');
