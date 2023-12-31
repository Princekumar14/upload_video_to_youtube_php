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

namespace Google\Service\Contentwarehouse;

class ResearchScamCoscamRestrictDefinition extends \Google\Collection
{
  protected $collection_key = 'disjunctions';
  /**
   * @var ResearchScamCoscamConjunction[]
   */
  public $conjunctions;
  protected $conjunctionsType = ResearchScamCoscamConjunction::class;
  protected $conjunctionsDataType = 'array';
  /**
   * @var ResearchScamCoscamDisjunction[]
   */
  public $disjunctions;
  protected $disjunctionsType = ResearchScamCoscamDisjunction::class;
  protected $disjunctionsDataType = 'array';
  /**
   * @var string
   */
  public $subsKey;

  /**
   * @param ResearchScamCoscamConjunction[]
   */
  public function setConjunctions($conjunctions)
  {
    $this->conjunctions = $conjunctions;
  }
  /**
   * @return ResearchScamCoscamConjunction[]
   */
  public function getConjunctions()
  {
    return $this->conjunctions;
  }
  /**
   * @param ResearchScamCoscamDisjunction[]
   */
  public function setDisjunctions($disjunctions)
  {
    $this->disjunctions = $disjunctions;
  }
  /**
   * @return ResearchScamCoscamDisjunction[]
   */
  public function getDisjunctions()
  {
    return $this->disjunctions;
  }
  /**
   * @param string
   */
  public function setSubsKey($subsKey)
  {
    $this->subsKey = $subsKey;
  }
  /**
   * @return string
   */
  public function getSubsKey()
  {
    return $this->subsKey;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ResearchScamCoscamRestrictDefinition::class, 'Google_Service_Contentwarehouse_ResearchScamCoscamRestrictDefinition');
