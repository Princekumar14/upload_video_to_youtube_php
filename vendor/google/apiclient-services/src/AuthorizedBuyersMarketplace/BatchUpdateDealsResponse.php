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

namespace Google\Service\AuthorizedBuyersMarketplace;

class BatchUpdateDealsResponse extends \Google\Collection
{
  protected $collection_key = 'deals';
  /**
   * @var Deal[]
   */
  public $deals;
  protected $dealsType = Deal::class;
  protected $dealsDataType = 'array';

  /**
   * @param Deal[]
   */
  public function setDeals($deals)
  {
    $this->deals = $deals;
  }
  /**
   * @return Deal[]
   */
  public function getDeals()
  {
    return $this->deals;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BatchUpdateDealsResponse::class, 'Google_Service_AuthorizedBuyersMarketplace_BatchUpdateDealsResponse');
