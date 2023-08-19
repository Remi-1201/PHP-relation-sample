<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class DeleteBooksTable extends Command
{
    protected $signature = 'books:delete';

    protected $description = 'Delete the books table';

    public function handle()
    {
        if (Schema::hasTable('books')) {
            Schema::dropIfExists('books');
            $this->info('Books table deleted successfully.');
        } else {
            $this->error('Books table does not exist.');
        }
    }
}