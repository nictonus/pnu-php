<?
class News{
    protected $id;
    protected $topic;
    protected $title;
    protected $content;
    protected $time;
    public function __construct($id,$topic,$title,$content,$time){
        $this->id = $id;
        $this->topic = $topic;
        $this->title = $title;
        $this->content = $content;
        $this->time = $time;
    }
    public function GetNews(){
        echo "<b>".$this->title."</b>";
        echo "<b>".$this->time."</b>";
        echo "<p>".$this->content."</p>";
    }
}
?>