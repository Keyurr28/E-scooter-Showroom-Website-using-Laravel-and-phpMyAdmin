    <?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateFeedbackModelsTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
{
    Schema::create('feedback_models', function (Blueprint $table) {
        $table->id();
        $table->string('custname', 100);
        $table->string('mobileno', 11);
        $table->string('custemail', 100);
        $table->text('description'); // Change from string to text
        $table->timestamps();
    });
}

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists('feedback_models');
        }
    }
