<?php

/*
 * This file is part of the zibios/wrike-php-jmsserializer package.
 *
 * (c) Zbigniew Ślązak
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zibios\WrikePhpJmsserializer\Model\Workflow;

use JMS\Serializer\Annotation as SA;
use Zibios\WrikePhpJmsserializer\Model\ResponseModelInterface;

/**
 * Workflow Response Model.
 */
class WorkflowResponseModel implements ResponseModelInterface
{
    /**
     * Kind of response.
     *
     * @SA\Type("string")
     * @SA\SerializedName("kind")
     *
     * @var string|null
     */
    protected $kind;

    /**
     * Collection of response models.
     *
     * @SA\Type("array<Zibios\WrikePhpJmsserializer\Model\Workflow\WorkflowResourceModel>")
     * @SA\SerializedName("data")
     *
     * @var array|WorkflowResourceModel]|null
     */
    protected $data;

    /**
     * @return null|string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @param null|string $kind
     *
     * @return $this
     */
    public function setKind($kind)
    {
        $this->kind = $kind;

        return $this;
    }

    /**
     * @return array|WorkflowResourceModel[]|null
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param array|WorkflowResourceModel[]|null $data
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }
}
