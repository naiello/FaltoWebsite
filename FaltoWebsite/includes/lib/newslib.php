<?php

class NewsArticle {
    public $file = "";
    public $title = "";
    public $author = "";
    public $image = "";
    public $date = "";
    public $text = "";
    
    public function get_preview_text($minlen = 597) {
        if (strlen($this->text) <= $minlen) {
            return $this->text;
        }
        
        return substr($this->text, 0, strpos($this->text, " ", $minlen)) . "...";
    }
    
    public function get_image_tag() {
        if (file_exists($this->image)) {
            return "<img class=\"profile\" src=\"$this->image\">";
        }
        
        return "";
    }
    
    public function get_index() {
        return str_replace(".xml", "", str_replace("news/", "", $this->file));
    }
    
    public function get_view_link() {
        return "view_news.php?a=" . $this->get_index();
    }
    
    public static function from_file($file) {
        if (!file_exists($file)) {
            return false;
        }
        
        $root = simplexml_load_file($file);
        $article = new NewsArticle;
        $article->author = $root->author;
        $article->date = $root->date;
        $article->text = str_replace("[para]", "</p><p>", $root->content);
        $article->title = $root->title;
        $article->image = $root->image;
        $article->file = $file;
        
        return $article;
    }
}

// Loads a list of available news article file names
function load_news_list($maxlen = -1) {
    $articles = array();
    if ($handle = opendir("news")) {
        while ($article = readdir($handle)) {
            $articles[] = trim($article);
        }

        // Filter out dotfiles and non-XML files
        $articles = preg_grep('/^[^.]*\\.xml$/', $articles);
        arsort($articles);
        
        if (($maxlen > 0) && ($maxlen < count($articles))) {
            $articles = array_slice($articles, 0, $maxlen);
        }

        closedir($handle);
    }
    
    return $articles;
}

// Creates an array of NewsArticle objects from a list of files
function load_articles($files) {
    $articles = array();
    foreach ($files as $file) {
        if (file_exists("news/" . $file)) {
            $articles[] = NewsArticle::from_file("news/" . $file);
        }
    }
    
    return $articles;
}