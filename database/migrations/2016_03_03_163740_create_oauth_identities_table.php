<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * Class CreateOauthIdentitiesTable
 */
class CreateOauthIdentitiesTable extends Migration
{

    /**
     * The authentication service providers table name
     *
     * @var string
     */
    protected $authenticationProvidersTable;

    /**
     * The users table name
     *
     * @var string
     */
    protected $usersTable;

    /**
     * CreateOauthIdentitiesTable constructor.
     *
     */
    public function __construct( )
    {
        $this->authenticationProvidersTable = Config::get('acacha-socialite.table');
    }

    /**
     * Migration up
     */
    public function up()
    {
        Schema::create($this->authenticationProvidersTable, function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('provider_user_id');
            $table->string('provider');
            $table->string('access_token');
            $table->string('avatar');
            $table->string('name');
            $table->string('nickname')->nullable();;
            $table->timestamps();
        });

    }

    /**
     * Migration down
     */
    public function down()
    {
        Schema::drop($this->authenticationProvidersTable);
    }

}