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

namespace Google\Service\Dataflow;

class WorkerMessageResponse extends \Google\Model
{
  /**
   * @var WorkerHealthReportResponse
   */
  public $workerHealthReportResponse;
  protected $workerHealthReportResponseType = WorkerHealthReportResponse::class;
  protected $workerHealthReportResponseDataType = '';
  /**
   * @var ResourceUtilizationReportResponse
   */
  public $workerMetricsResponse;
  protected $workerMetricsResponseType = ResourceUtilizationReportResponse::class;
  protected $workerMetricsResponseDataType = '';
  /**
   * @var WorkerShutdownNoticeResponse
   */
  public $workerShutdownNoticeResponse;
  protected $workerShutdownNoticeResponseType = WorkerShutdownNoticeResponse::class;
  protected $workerShutdownNoticeResponseDataType = '';
  /**
   * @var WorkerThreadScalingReportResponse
   */
  public $workerThreadScalingReportResponse;
  protected $workerThreadScalingReportResponseType = WorkerThreadScalingReportResponse::class;
  protected $workerThreadScalingReportResponseDataType = '';

  /**
   * @param WorkerHealthReportResponse
   */
  public function setWorkerHealthReportResponse(WorkerHealthReportResponse $workerHealthReportResponse)
  {
    $this->workerHealthReportResponse = $workerHealthReportResponse;
  }
  /**
   * @return WorkerHealthReportResponse
   */
  public function getWorkerHealthReportResponse()
  {
    return $this->workerHealthReportResponse;
  }
  /**
   * @param ResourceUtilizationReportResponse
   */
  public function setWorkerMetricsResponse(ResourceUtilizationReportResponse $workerMetricsResponse)
  {
    $this->workerMetricsResponse = $workerMetricsResponse;
  }
  /**
   * @return ResourceUtilizationReportResponse
   */
  public function getWorkerMetricsResponse()
  {
    return $this->workerMetricsResponse;
  }
  /**
   * @param WorkerShutdownNoticeResponse
   */
  public function setWorkerShutdownNoticeResponse(WorkerShutdownNoticeResponse $workerShutdownNoticeResponse)
  {
    $this->workerShutdownNoticeResponse = $workerShutdownNoticeResponse;
  }
  /**
   * @return WorkerShutdownNoticeResponse
   */
  public function getWorkerShutdownNoticeResponse()
  {
    return $this->workerShutdownNoticeResponse;
  }
  /**
   * @param WorkerThreadScalingReportResponse
   */
  public function setWorkerThreadScalingReportResponse(WorkerThreadScalingReportResponse $workerThreadScalingReportResponse)
  {
    $this->workerThreadScalingReportResponse = $workerThreadScalingReportResponse;
  }
  /**
   * @return WorkerThreadScalingReportResponse
   */
  public function getWorkerThreadScalingReportResponse()
  {
    return $this->workerThreadScalingReportResponse;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(WorkerMessageResponse::class, 'Google_Service_Dataflow_WorkerMessageResponse');
