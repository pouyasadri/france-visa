// scripts/import_images.php
$rows = DB::select("SELECT id, house_images, house_main_image FROM avc_old.houses");

foreach ($rows as $r) {
    $position = 0;

    if (!empty($r->house_main_image)) {
        DB::table('property_images')->insert([
            'property_id' => $r->id,
            'path' => $r->house_main_image,
            'is_primary' => true,
            'position' => $position++,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    if (!empty($r->house_images)) {
        $imgs = json_decode($r->house_images, true) ?? [];
        foreach ($imgs as $path) {
            if (!$path) continue;

            $exists = DB::table('property_images')
                ->where('property_id', $r->id)
                ->where('path', $path)
                ->exists();

            if (!$exists) {
                DB::table('property_images')->insert([
                    'property_id' => $r->id,
                    'path' => $path,
                    'is_primary' => false,
                    'position' => $position++,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
