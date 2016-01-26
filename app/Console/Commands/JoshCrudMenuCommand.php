<?php namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use File;

class JoshCrudMenuCommand extends Command {

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'crud:menu';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add required menu items to sub view';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function fire()
    {
        $crudName = strtolower($this->argument('name'));
        $crudNameCap = ucwords($crudName);
        $crudNamePlural = str_plural($crudName);
        $crudNamePluralCap = ucwords($crudNamePlural);
        $path = $this->laravel['path'].'/Console/Commands/stubs/menu.stub';
        $menu = File::get($path);
        $destination = $this->laravel['path'].'/../resources/views/admin/layouts/menu.blade.php';

        $menu = str_replace('%%crudNamePlural%%',$crudNamePlural,$menu);
        $menu = str_replace('%%crudNamePluralCap%%',$crudNamePluralCap,$menu);
        $menu = str_replace('%%crudNameCap%%',$crudNameCap,$menu);



        $bytesWritten = File::append($destination, $menu);
        if ($bytesWritten === false)
        {
            die("Couldn't write to the file.");
        }

        $this->info('Crud added to menu successfully.');

    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['name', InputArgument::REQUIRED, 'Name of the Crud.'],
        ];
    }

    /*
     * Get the console command options.
     *
     * @return array
     */

    protected function getOptions()
    {
        return [
            ['fields', null, InputOption::VALUE_OPTIONAL, 'The fields of the form.', null],
        ];
    }

}
