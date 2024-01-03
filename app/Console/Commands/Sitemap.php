<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;

class Sitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap';

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
        $this->newLine(1);
        $this->info('Start generate sitemap ...');
        $this->newLine(1);
        
        $progressBar = $this->output->createProgressBar(100);


        $progressBar->advance();

        SitemapGenerator::create(config('app.url'))
            ->writeToFile(public_path('sitemap.xml'));

        $progressBar->finish();

        $this->newLine(2);
        $this->info('Completed');
        $this->newLine(1);
    }
}
