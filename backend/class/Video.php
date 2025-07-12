<?php

class Video
{

    private int $vid_id;
    private string $vid_name;
    private string $vid_description;
    private string $vid_gender;
    private string $vid_release_date;
    private int $vid_cover;

    public function __construct(
        int $id_video,
        string $video_name,
        string $video_description,
        string $video_gender,
        string $video_release_date,
        int $video_cover
    ) {
        $this->vid_id = $id_video;
        $this->vid_name = $video_name;
        $this->vid_description = $video_description;
        $this->vid_gender = $video_gender;
        $this->vid_release_date = $video_release_date;
        $this->vid_cover = $video_cover;
    }
    //getters

    public function getVidId(): int
    {
        return $this->vid_id;
    }
    public function getVidName(): string
    {
        return $this->vid_name;
    }
    public function getVidDescript(): string
    {
        return $this->vid_description;
    }
    public function getVidGender(): string
    {
        return $this->vid_gender;
    }
    public function getVidDate(): string
    {
        return $this->vid_release_date;
    }
    public function getVidCover(): int
    {
        return $this->vid_cover;
    }
}
