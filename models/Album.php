<?php
class Album {
    private int $id;
    private string $title;
    private string $releaseDate;
    private string $recordingPeriod;
    private string $studio;
    private int $duration;
    private string $label;
    private string $producer;
    private string $wikipediaPresentation;
    
    /**
     * @param Album[] $data
     */
    public function __construct(array $data = []){
        if(!empty($data)){
            $this->hydrate($data);
        }
    }
    
    /**
     * @param Album[] $data
     */
    public function hydrate(array $data) : void {
        foreach($data as $key => $value){
            $method = "set" . str_replace("_", "", ucwords($key, "_"));
            
            if (method_exists($this, $method)){
                $this->$method($value);
            }
        }
    }
    
    public function getId() : int {
        return $this->id;
    }
    
    public function setId(int $id) : void {
        $this->id = $id;
    }
    
    public function getTitle() : string {
        return $this->title;
    }
    
    public function setTitle(string $title) : void {
        $this->title = $title;
    }
    
    public function getReleaseDate() : string {
        return $this->releaseDate;
    }
    
    public function getReleaseYear() : string {
        $releaseYear = substr($this->releaseDate, 0, 4);
        return $releaseYear;
    }
    
    public function getReleaseDateInUSString() : string {
        $date = new DateTime($this->releaseDate);
        return $date->format('F d, Y');
    }
    
    public function setReleaseDate(string $releaseDate) : void {
        $this->releaseDate = $releaseDate;
    }
    
    public function getRecordingPeriod() : string {
        return $this->recordingPeriod;
    }
    
    public function setRecordingPeriod(string $recordingPeriod) : void {
        $this->recordingPeriod = $recordingPeriod;
    }
    
    public function getStudio() : string {
        return $this->studio;
    }
    
    public function setStudio(string $studio) : void {
        $this->studio = $studio;
    }
    
    public function getDuration() : int {
        return $this->duration;
    }
    
    public function getDurationInMinutes() : string {
        $durationMinutes = str_pad(intval($this->duration / 60), 2, "0", STR_PAD_LEFT);
        $durationSeconds = str_pad($this->duration % 60, 2, "0", STR_PAD_LEFT);
        $durationInMinutes = "$durationMinutes:$durationSeconds";
        return $durationInMinutes;
    }
    
    public function setDuration(int $duration) : void {
        $this->duration = $duration;
    }
    
    public function getLabel() : string {
        return $this->label;
    }
    
    public function setLabel(string $label) : void {
        $this->label = $label;
    }
    
    public function getProducer() : string {
        return $this->producer;
    }
    
    public function setProducer(string $producer) : void {
        $this->producer = $producer;
    }
    
    public function getWikipediaPresentation() : string {
        return $this->wikipediaPresentation;
    }
    
    public function setWikipediaPresentation(string $wikipediaPresentation) : void {
        $this->wikipediaPresentation = $wikipediaPresentation;
    }
}