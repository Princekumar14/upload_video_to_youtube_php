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

namespace Google\Service\Books;

class Dictlayerdata extends \Google\Model
{
  /**
   * @var DictlayerdataCommon
   */
  public $common;
  protected $commonType = DictlayerdataCommon::class;
  protected $commonDataType = '';
  /**
   * @var DictlayerdataDict
   */
  public $dict;
  protected $dictType = DictlayerdataDict::class;
  protected $dictDataType = '';
  /**
   * @var string
   */
  public $kind;

  /**
   * @param DictlayerdataCommon
   */
  public function setCommon(DictlayerdataCommon $common)
  {
    $this->common = $common;
  }
  /**
   * @return DictlayerdataCommon
   */
  public function getCommon()
  {
    return $this->common;
  }
  /**
   * @param DictlayerdataDict
   */
  public function setDict(DictlayerdataDict $dict)
  {
    $this->dict = $dict;
  }
  /**
   * @return DictlayerdataDict
   */
  public function getDict()
  {
    return $this->dict;
  }
  /**
   * @param string
   */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /**
   * @return string
   */
  public function getKind()
  {
    return $this->kind;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Dictlayerdata::class, 'Google_Service_Books_Dictlayerdata');
