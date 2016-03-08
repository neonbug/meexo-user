<?php use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertContactFormTranslations extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return  void
	 */
	public function up()
	{
		$migration_helper = App::make('\Neonbug\Common\Helpers\MigrationHelper');
		$migration_helper->insertTranslations(__DIR__ . '/translations.contact_form/');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return  void
	 */
	public function down()
	{
	}

}
