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

namespace Google\Service\CloudVideoIntelligence;

class GoogleCloudVideointelligenceV1p2beta1NormalizedBoundingPoly extends \Google\Collection
{
  protected $collection_key = 'vertices';
  /**
   * @var GoogleCloudVideointelligenceV1p2beta1NormalizedVertex[]
   */
  public $vertices;
  protected $verticesType = GoogleCloudVideointelligenceV1p2beta1NormalizedVertex::class;
  protected $verticesDataType = 'array';

  /**
   * @param GoogleCloudVideointelligenceV1p2beta1NormalizedVertex[]
   */
  public function setVertices($vertices)
  {
    $this->vertices = $vertices;
  }
  /**
   * @return GoogleCloudVideointelligenceV1p2beta1NormalizedVertex[]
   */
  public function getVertices()
  {
    return $this->vertices;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudVideointelligenceV1p2beta1NormalizedBoundingPoly::class, 'Google_Service_CloudVideoIntelligence_GoogleCloudVideointelligenceV1p2beta1NormalizedBoundingPoly');
