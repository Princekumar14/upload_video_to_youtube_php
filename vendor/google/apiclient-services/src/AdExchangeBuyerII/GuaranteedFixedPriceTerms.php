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

namespace Google\Service\AdExchangeBuyerII;

class GuaranteedFixedPriceTerms extends \Google\Collection
{
  protected $collection_key = 'fixedPrices';
  /**
   * @var PricePerBuyer[]
   */
  public $fixedPrices;
  protected $fixedPricesType = PricePerBuyer::class;
  protected $fixedPricesDataType = 'array';
  /**
   * @var string
   */
  public $guaranteedImpressions;
  /**
   * @var string
   */
  public $guaranteedLooks;
  /**
   * @var string
   */
  public $impressionCap;
  /**
   * @var string
   */
  public $minimumDailyLooks;
  /**
   * @var string
   */
  public $percentShareOfVoice;
  /**
   * @var string
   */
  public $reservationType;

  /**
   * @param PricePerBuyer[]
   */
  public function setFixedPrices($fixedPrices)
  {
    $this->fixedPrices = $fixedPrices;
  }
  /**
   * @return PricePerBuyer[]
   */
  public function getFixedPrices()
  {
    return $this->fixedPrices;
  }
  /**
   * @param string
   */
  public function setGuaranteedImpressions($guaranteedImpressions)
  {
    $this->guaranteedImpressions = $guaranteedImpressions;
  }
  /**
   * @return string
   */
  public function getGuaranteedImpressions()
  {
    return $this->guaranteedImpressions;
  }
  /**
   * @param string
   */
  public function setGuaranteedLooks($guaranteedLooks)
  {
    $this->guaranteedLooks = $guaranteedLooks;
  }
  /**
   * @return string
   */
  public function getGuaranteedLooks()
  {
    return $this->guaranteedLooks;
  }
  /**
   * @param string
   */
  public function setImpressionCap($impressionCap)
  {
    $this->impressionCap = $impressionCap;
  }
  /**
   * @return string
   */
  public function getImpressionCap()
  {
    return $this->impressionCap;
  }
  /**
   * @param string
   */
  public function setMinimumDailyLooks($minimumDailyLooks)
  {
    $this->minimumDailyLooks = $minimumDailyLooks;
  }
  /**
   * @return string
   */
  public function getMinimumDailyLooks()
  {
    return $this->minimumDailyLooks;
  }
  /**
   * @param string
   */
  public function setPercentShareOfVoice($percentShareOfVoice)
  {
    $this->percentShareOfVoice = $percentShareOfVoice;
  }
  /**
   * @return string
   */
  public function getPercentShareOfVoice()
  {
    return $this->percentShareOfVoice;
  }
  /**
   * @param string
   */
  public function setReservationType($reservationType)
  {
    $this->reservationType = $reservationType;
  }
  /**
   * @return string
   */
  public function getReservationType()
  {
    return $this->reservationType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GuaranteedFixedPriceTerms::class, 'Google_Service_AdExchangeBuyerII_GuaranteedFixedPriceTerms');
