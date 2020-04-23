# exploremhg
## Allemang Designs
### William R Allemang IV
### Capstone 450-1

Within this repo are files that can be public, and are reviewable. There are sensitive config/environment 
files that need to stay hidden for security reasons. These files are to be assumed psuedo-code. To view
the complete project please vist **exploremhg.com**.

---
###app/
App/ contains the controllers used for the application @ Http/Controllers. Marked Album for album, Pages for pages etc.

Album.php & Photo.php act as data model classes. You will notice they contain SQL attributes as propertys i.e:
'''php
//Database relationship
    public function photos(){
        return $this->hasMany('App\Photo');
    }
'''
This allows Laravel to use Object Relational Modeling (ORM) tools, programming SQL in class syntax
---
###database/migrations
/migrations/ contains tables that are ran via console commands to build tables and add on columns. I have seperate
migration files, 'instances', that create a table vs add on a table:
create_users_table:
'''php
public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }
'''

add_group_to_user:
'''php
public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('group');
        });
    }
'''
---
###public/
public contains files that will be used by all pages on the website. css/ contains my custom
css sheet. img/ contains photos that are static instances, like the landing page photos and 
slideshow. My js/ contains all.js & app.js. Scripts are compiled using web-mix('webpack.mix.js'). The public 
folder contains a symlink with a storage folder. This storage folder is hidden to anyone 
except Laravel. We use this symlink to store uploaded images tracked by the database, so 
viewers can't access all photos being used by the site. 'symlinkcreate.php'.

---
###resources/
resources contain different views, organized by functionality. Views are what the user sees. 
Albums/ contains CRUD operations and photos display. This is true with pages & photos. inc/ 
includes various parts that are reused over the site. Most importantly look at photo_layout.blade.php
& album_layout.blade.php, you can see the algorithm I came up with to display albums and photos 
in a organized way, while leaving room for future functionality. The email.blade.php is how contact
emails are structured. The backend dashboard can be shown on home.blade.php. home.blade.php is controlled
by the Homecontroller.php
---


