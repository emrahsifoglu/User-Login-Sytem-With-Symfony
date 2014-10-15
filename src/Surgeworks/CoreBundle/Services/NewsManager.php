<?php
namespace Surgeworks\CoreBundle\Services;

use XMLReader;

class NewsManager {

    /**
     * @var string
     */
    protected $url;

    /**
     * @param string $url
     */
    public function __construct($url){
        $this->url = $url;
    }

    /**
     * Get news
     *
     * @return array
     */
    public function findAll(){
        return $this->getRSSFeed($this->url);
    }

    /**
     * Get news from RSS
     *
     * @param string $url
     * @return array
     */
    public function getRSSFeed($url){

        $filename = $url;
        $items = array();
        $i = 0;
        $xmlReader = new XMLReader();
        $xmlReader->open ($filename, null, LIBXML_NOBLANKS);

        $isParserActive = false;
        $simpleNodeTypes = array ("title", "description", "link", "pubDate");

        while ($xmlReader->read ())
        {
            $nodeType = $xmlReader->nodeType;

            // Only deal with Beginning/Ending Tags
            if ($nodeType != XMLReader::ELEMENT && $nodeType != XMLReader::END_ELEMENT)
            {
                continue;
            }
            else if ($xmlReader->name == "item")
            {
                if (($nodeType == XMLReader::END_ELEMENT) && $isParserActive)
                {
                    $i++;
                }
                $isParserActive = ($nodeType != XMLReader::END_ELEMENT);
            }

            if (!$isParserActive || $nodeType == XMLReader::END_ELEMENT)
            {
                continue;
            }

            $name = $xmlReader->name;

            if (in_array ($name, $simpleNodeTypes))
            {
                // Skip to the text node
                $xmlReader->read ();
                $items[$i][$name] = $xmlReader->value;
            }
            else if ($name == "media:thumbnail")
            {
                $items[$i]['media:thumbnail'] = array (
                    "url" => $xmlReader->getAttribute("url"),
                    "width" => $xmlReader->getAttribute("width"),
                    "height" => $xmlReader->getAttribute("height")
                );
            }
        }

        /*
        $rss = new \DOMDocument();
        $rss->load($filename);

        foreach ($rss->getElementsByTagName('item') as $node) {
            $item = array (
                'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
                'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
                'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
                'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
            );
            array_push($feed, $item);
        }*/

        return $items;
    }
} 