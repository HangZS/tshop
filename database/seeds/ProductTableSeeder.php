<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/51EBogBpyXL.jpg',
            'title' => 'The Hypnotist: A novel (Joona Linna Book 1)',
            'description' => 'A riveting new translation of the first installment in the #1 internationally bestselling Joona Linna series, The Hypnotist shows the lengths one determined detective is willing to go to solve a horrific crime.',
            'price' => 12
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/51gnsdMK0qL.jpg',
            'title' => 'The Nightmare: A novel (Joona Linna Book 2) ',
            'description' => 'The second book in the #1 internationally bestselling Joona Linna series, The Nightmare finds Joona teaming up with a national security agent to find the link between two mysterious, seemingly unrelated deaths.',
            'price' => 16
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/51kBBVdOFJL.jpg',
            'title' => 'The Fire Witness: A novel (Joona Linna Book 3)',
            'description' => 'The third installment of the #1 internationally bestselling Joona Linna series, The Fire Witness sees Joona drawn into a gruesome, mysterious murder at a home for wayward girls.',
            'price' => 14
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/41sCKvIb4iL.jpg',
            'title' => 'The Sandman: A novel (Joona Linna Book 4)',
            'description' => '“With its tight, staccato chapters and cast of dangerous wraiths lurking everywhere, The Sandman is a nonstop fright.” —Janet Maslin, The New York Times',
            'price' => 14
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/51mz-N11NGL.jpg',
            'title' => 'Stalker: A novel (Joona Linna Book 5)',
            'description' => '“Lars Kepler … [has] a taste for the macabre and a surefire recipe for the lurid serial-killer thriller. … This is not a book for anyone on heart medication. Kepler is a virtuoso at delivering scenes of suspense.” —Marilyn Stasio, The New York Times Book Review.',
            'price' => 12
        ]);
        $product->save();
    }
}
