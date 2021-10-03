<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FoldersController;
use Google\Service\CloudResourceManager\Folder;

class DefaltFolders implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $folders;
    protected $user;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    

    public function __construct($user)
    {
        $this->folders = new FoldersController;
        $this->user = $user;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $userId = $this->user->id ?? null;
        // $lists = $this->folders->index();
        $this->folders->store($userId);
        $this->folders->store2($userId);
        $this->folders->store3($userId);
        $this->folders->store4($userId);
        $this->folders->store5($userId);
        $this->folders->store6($userId);
    }
}
