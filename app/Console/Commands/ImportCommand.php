<?php

namespace App\Console\Commands;

use App\Models\Blog;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class ImportCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $json = json_decode(file_get_contents(__DIR__ . "/data/result.json"), true);
        $messages = $json["messages"];
        foreach ($messages as $key => $message) {
            $date = $message["date"];
            $texts = $message["text"] ?? "";
            $photo = $message["photo"] ?? "";
            $tags = "";
            $msg = '';
            $title = '';
            if (!is_array($texts)) {
                continue;
            }
            foreach ($texts as $k => $text) {
                if ($k == 0) {
                    if (is_array($text) and array_key_exists("type", $text) and $text["type"] == "bold") {
                        $title = $text["text"];
                    } else {
                        continue;
                    }
                }

                if (is_array($text) and array_key_exists("type", $text) and $text["type"] == "hashtag") {
                    $tags .= trim($text["text"], " \n\r\t\v\0#") . ",";
                } elseif (is_array($text)) {
                    if ($text["type"] == "bold") {
                        $msg .= "<b>{$text["text"]}</b>";
                    } else {
                        $msg .= $text["text"];
                    }
                } elseif (is_string($text)) {
                    $msg .= $text;
                }
            }
            $msg = str_replace("\n", "<br>", $msg);
            $tags = trim($tags, ",");
            if (!empty($title) and !empty($photo)) {
                if (!preg_match('/[\x{0400}-\x{04FF}]/u', $msg)) {
                    dump(base_path("app/Console/Commands/data/$photo"));
                    File::copy(base_path("app/Console/Commands/data/$photo"), storage_path("app/public/$photo"));
                    Blog::query()->create([
                        "title" => $title,
                        "description" => $msg,
                        "tag" => $tags ?: "blog",
                        "image" => $photo,
                        "is_top" => rand(0, 1),
                        "is_popular" => rand(0, 1),
                        "view_count" => rand(10, 1000),
                        "status" => 1,
                        "type" => rand(1, 6),
                        "created_at" => $date
                    ]);
                }

            }
        }
    }
}
