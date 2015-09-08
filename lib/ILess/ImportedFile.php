<?php

/*
 * This file is part of the ILess
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ILess;

use ILess\Exception\Exception;
use ILess\Node\RulesetNode;
use ILess\Util;

/**
 * Import
 *
 * @package ILess
 * @subpackage Import
 */
final class ImportedFile
{
    /**
     * The absolute path or URL
     *
     * @var string
     */
    protected $path;

    /**
     * The content of the file
     *
     * @var string
     */
    protected $content;

    /**
     * The ruleset
     *
     * @var RulesetNode
     */
    protected $ruleset;

    /**
     * Error exception
     *
     * @var Exception
     */
    protected $error;

    /**
     * Last modification of the file as Unix timestamp
     *
     * @var integer
     */
    protected $lastModified;

    /**
     * Constructor
     *
     * @param string $path The absolute path or URL
     * @param string $content The content of the local or remote file
     * @param integer $lastModified The last modification time
     */
    public function __construct($path, $content, $lastModified)
    {
        $this->path = $path;
        $this->content = Util::normalizeLineFeeds($content);
        $this->lastModified = $lastModified;
    }

    /**
     * Sets the ruleset
     *
     * @param string|RulesetNode|null $ruleset
     * @return ImportedFile
     */
    public function setRuleset($ruleset)
    {
        $this->ruleset = $ruleset;

        return $this;
    }

    /**
     * Returns the ruleset
     *
     * @return RulesetNode|string|null
     */
    public function getRuleset()
    {
        return $this->ruleset;
    }

    /**
     * Sets an error
     *
     * @param \Exception $error
     * @return ImportedFile
     */
    public function setError(\Exception $error)
    {
        $this->error = $error;

        return $this;
    }

    /**
     * Returns the error
     *
     * @return \Exception
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Returns the path or URL
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Returns the content of the local or remote file
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Is virtual?
     *
     * @return boolean
     */
    public function getLastModified()
    {
        return $this->lastModified;
    }

}
