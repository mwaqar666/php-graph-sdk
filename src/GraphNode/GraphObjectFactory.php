<?php
/**
 * Copyright 2017 Facebook, Inc.
 *
 * You are hereby granted a non-exclusive, worldwide, royalty-free license to
 * use, copy, modify, and distribute this software in source code or binary
 * form for use in connection with the web services and APIs provided by
 * Facebook.
 *
 * As with any software that integrates with the Facebook platform, your use
 * of this software is subject to the Facebook Developer Principles and
 * Policies [http://developers.facebook.com/policy/]. This copyright notice
 * shall be included in all copies or substantial portions of the software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 */
namespace Facebook\GraphNode;

use Facebook\Exception\SDKException;

/**
 * @package Facebook
 *
 * @deprecated 5.0.0 GraphObjectFactory has been renamed to GraphNodeFactory
 *
 * @todo v6: Remove this class
 */
class GraphObjectFactory extends GraphNodeFactory
{
    /**
     * @const string The base graph object class.
     */
    const BASE_GRAPH_NODE_CLASS = GraphObject::class;

    /**
     * @const string The base graph edge class.
     */
    const BASE_GRAPH_EDGE_CLASS = GraphList::class;

    /**
     * Tries to convert a FacebookResponse entity into a GraphNode.
     *
     * @param null|string $subclassName the GraphNode sub class to cast to
     *
     * @return GraphNode
     *
     * @deprecated 5.0.0 GraphObjectFactory has been renamed to GraphNodeFactory
     */
    public function makeGraphObject($subclassName = null)
    {
        return $this->makeGraphNode($subclassName);
    }

    /**
     * Tries to convert a FacebookResponse entity into a GraphEdge.
     *
     * @param null|string $subclassName the GraphNode sub class to cast the list items to
     * @param bool        $auto_prefix  toggle to auto-prefix the subclass name
     *
     * @return GraphEdge
     *
     * @deprecated 5.0.0 GraphObjectFactory has been renamed to GraphNodeFactory
     */
    public function makeGraphList($subclassName = null, $auto_prefix = true)
    {
        return $this->makeGraphEdge($subclassName, $auto_prefix);
    }
}
