<?php

namespace App\Observers;

use App\Mail\deleteMail;
use App\Models\Author;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class authorObserver
{
    /**
     * Handle the Author "created" event.
     *
     * @param  \App\Models\Author  $author
     * @return void
     */
    public function created(Author $author)
    {
        //
    }

    /**
     * Handle the Author "updated" event.
     *
     * @param  \App\Models\Author  $author
     * @return void
     */
    public function updated(Author $author)
    {
        //
    }

    /**
     * Handle the Author "deleted" event.
     *
     * @param  \App\Models\Author  $author
     * @return void
     */
    public function deleted(Author $author)
    {
        Log::info("Author Deleted");
        Mail::to($author->email)->send(new deleteMail($author));
    }

    /**
     * Handle the Author "restored" event.
     *
     * @param  \App\Models\Author  $author
     * @return void
     */
    public function restored(Author $author)
    {
        //
    }

    /**
     * Handle the Author "force deleted" event.
     *
     * @param  \App\Models\Author  $author
     * @return void
     */
    public function forceDeleted(Author $author)
    {
        //
    }
}
