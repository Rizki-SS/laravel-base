<?php

namespace App\Common\Presentation\CLI;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class CreateControllerCmd extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:control {domainName} {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates a new controller in the specified domain';

    /**
     * TODO : Execute the console command create Controller.
     * @return int
     */
    public function handle()
    {
        // $domainName = $this->argument('domainName');
        // $name = $this->argument('name');

        // $path = 'src/' . $domainName . '/Application/Controller/' . $name . 'Controller.php';

        // $stub = File::get('./stubs/Controller.stub');
        // $stubReplace = [
        //     '**Domain**' => $domainName,
        //     '**name_lc**' => Str::snake($name),
        // ];

        // $file = strtr($stub, $stubReplace);

        // File::put($path, $file);
        return 1;
    }
}