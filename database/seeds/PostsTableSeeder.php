<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("posts")->insert([
        	["title" => "Sample Post",
        	  "post" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lobortis, ante in pretium volutpat, risus metus molestie odio, non placerat magna diam sit amet augue. Donec ullamcorper ornare mauris, id bibendum lacus viverra vel. Curabitur in pellentesque metus. Quisque gravida molestie turpis, id tincidunt purus viverra vitae. In sollicitudin, arcu at interdum sagittis, massa mi cursus diam, eu sodales purus erat vitae dui. Curabitur tempus urna consequat odio pretium pellentesque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam tincidunt eros orci, sit amet pharetra eros accumsan vitae. Quisque a massa id nisi sodales rhoncus sed ut ante. Duis sed augue non velit feugiat varius eget eu velit. Nam commodo posuere massa sed convallis. Phasellus dapibus commodo lectus, vitae gravida lorem. Donec molestie a nisi ac mattis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam tempor ante et rutrum consequat.",
              "user_id" => "1",
        	  "published" => true,
        	  "views" => 100	
        	],
          ["title" => "Sample Post 2",
        	  "post" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lobortis, ante in pretium volutpat, risus metus molestie odio, non placerat magna diam sit amet augue. Donec ullamcorper ornare mauris, id bibendum lacus viverra vel. Curabitur in pellentesque metus. Quisque gravida molestie turpis, id tincidunt purus viverra vitae. In sollicitudin, arcu at interdum sagittis, massa mi cursus diam, eu sodales purus erat vitae dui. Curabitur tempus urna consequat odio pretium pellentesque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam tincidunt eros orci, sit amet pharetra eros accumsan vitae. Quisque a massa id nisi sodales rhoncus sed ut ante. Duis sed augue non velit feugiat varius eget eu velit. Nam commodo posuere massa sed convallis. Phasellus dapibus commodo lectus, vitae gravida lorem. Donec molestie a nisi ac mattis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam tempor ante et rutrum consequat.",
              "user_id" => "1",
        	  "published" => true,
        	  "views" => 100	
        	],
        	["title" => "Sample Post 3",
        	  "post" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lobortis, ante in pretium volutpat, risus metus molestie odio, non placerat magna diam sit amet augue. Donec ullamcorper ornare mauris, id bibendum lacus viverra vel. Curabitur in pellentesque metus. Quisque gravida molestie turpis, id tincidunt purus viverra vitae. In sollicitudin, arcu at interdum sagittis, massa mi cursus diam, eu sodales purus erat vitae dui. Curabitur tempus urna consequat odio pretium pellentesque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam tincidunt eros orci, sit amet pharetra eros accumsan vitae. Quisque a massa id nisi sodales rhoncus sed ut ante. Duis sed augue non velit feugiat varius eget eu velit. Nam commodo posuere massa sed convallis. Phasellus dapibus commodo lectus, vitae gravida lorem. Donec molestie a nisi ac mattis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam tempor ante et rutrum consequat.",
              "user_id" => "1",
        	  "published" => true,
        	  "views" => 100	
        	],
        	["title" => "Sample Post 2212",
        	  "post" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lobortis, ante in pretium volutpat, risus metus molestie odio, non placerat magna diam sit amet augue. Donec ullamcorper ornare mauris, id bibendum lacus viverra vel. Curabitur in pellentesque metus. Quisque gravida molestie turpis, id tincidunt purus viverra vitae. In sollicitudin, arcu at interdum sagittis, massa mi cursus diam, eu sodales purus erat vitae dui. Curabitur tempus urna consequat odio pretium pellentesque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam tincidunt eros orci, sit amet pharetra eros accumsan vitae. Quisque a massa id nisi sodales rhoncus sed ut ante. Duis sed augue non velit feugiat varius eget eu velit. Nam commodo posuere massa sed convallis. Phasellus dapibus commodo lectus, vitae gravida lorem. Donec molestie a nisi ac mattis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam tempor ante et rutrum consequat.",
              "user_id" => "1",
        	  "published" => true,
        	  "views" => 100	
        	],
        	["title" => "Sample Post 45",
        	  "post" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lobortis, ante in pretium volutpat, risus metus molestie odio, non placerat magna diam sit amet augue. Donec ullamcorper ornare mauris, id bibendum lacus viverra vel. Curabitur in pellentesque metus. Quisque gravida molestie turpis, id tincidunt purus viverra vitae. In sollicitudin, arcu at interdum sagittis, massa mi cursus diam, eu sodales purus erat vitae dui. Curabitur tempus urna consequat odio pretium pellentesque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam tincidunt eros orci, sit amet pharetra eros accumsan vitae. Quisque a massa id nisi sodales rhoncus sed ut ante. Duis sed augue non velit feugiat varius eget eu velit. Nam commodo posuere massa sed convallis. Phasellus dapibus commodo lectus, vitae gravida lorem. Donec molestie a nisi ac mattis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam tempor ante et rutrum consequat.",
              "user_id" => "1",
        	  "published" => true,
        	  "views" => 100	
        	]
        ]);
    }
}
