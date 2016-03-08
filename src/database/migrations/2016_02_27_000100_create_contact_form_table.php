<?php use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactFormTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return  void
	 */
	public function up()
	{
		Schema::create('contact_form', function(Blueprint $table)
		{
			$table->increments('id_contact_form');
			$table->text('recepients');
			$table->text('config');
			$table->timestamps();
		});
		
		DB::table('role')->insert(
			['id_role' => 'contact_form', 'name' => 'ContactForm editor', 
				'created_at' => date('Y-m-d'), 'updated_at' => date('Y-m-d')]
		);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return  void
	 */
	public function down()
	{
		Schema::drop('contact_form');
	}

}
