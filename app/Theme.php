<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{

    const STATUS_ACTIVE = 'active';
    const STATUS_INACTIVE = 'inactive';
    const STATUS_ERROR = 'error';
    
    const THEMES_DIR = 'themes';
    const TEMPLATES_DIR = 'templates';
    const CONFIG_FILE = 'config.php';
    const FUNCTIONS_FILE = 'functions.php';
    const SCREENSHOT_FILE = 'screenshot.png';

    const TEMPLATES_INDEX_FILE = 'index.blade.php';
    const TEMPLATES_SCENE_FILE = 'scene.blade.php';
    const TEMPLATES_ASSETS_FILE = 'assets.blade.php';

    const INFINITE = 'infinite';

    const THEME_GENERATED_IMAGES = 'theme_generated_images';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'themes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'root_dir', 'status', 'user_id', 'config'
    ];

}
