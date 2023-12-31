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

namespace Google\Service\CloudTrace;

class Attributes extends \Google\Model
{
  /**
   * @var AttributeValue[]
   */
  public $attributeMap;
  protected $attributeMapType = AttributeValue::class;
  protected $attributeMapDataType = 'map';
  /**
   * @var int
   */
  public $droppedAttributesCount;

  /**
   * @param AttributeValue[]
   */
  public function setAttributeMap($attributeMap)
  {
    $this->attributeMap = $attributeMap;
  }
  /**
   * @return AttributeValue[]
   */
  public function getAttributeMap()
  {
    return $this->attributeMap;
  }
  /**
   * @param int
   */
  public function setDroppedAttributesCount($droppedAttributesCount)
  {
    $this->droppedAttributesCount = $droppedAttributesCount;
  }
  /**
   * @return int
   */
  public function getDroppedAttributesCount()
  {
    return $this->droppedAttributesCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Attributes::class, 'Google_Service_CloudTrace_Attributes');
