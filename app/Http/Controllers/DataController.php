<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Orchestra\Parser\Xml\Facade as XmlParser;

class DataController extends Controller
{
    public function getdata()
    {
        $xml = XmlParser::load(public_path('berita.xml'));
        $items = $xml->getContent();

        foreach($items->channel->item as $item) {
            echo "Judul: ".$item->title."<br>";
            echo "Tanggal: ".$item->pubDate."<br>";
            echo "Link: ".$item->link."<br>";
            echo "Desc: ".$item->description."<br>";
            echo "Images: ".$item->enclosure['url']."<br><br>";
        }
    }
}
