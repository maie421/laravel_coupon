<?php

namespace App\Console\Commands;

use Clockwork\Clockwork;
use Illuminate\Console\Command;

class PostCommendWordCoupon extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'coupon:word';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '게시글 댓글 작성시 특정단어 입력시 쿠폰 발급';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Successfully sent daily quote to everyone.');
    }
}
