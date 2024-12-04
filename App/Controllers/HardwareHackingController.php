<?php
namespace App\Controllers;
use App\Models\HardwareHacking;
class HardwareHackingController {
    public function index() {
        $items = HardwareHacking::all();
        require '../resources/views/hardwarehacking/index.blade.php';}

    public function create() {
        require '../resources/views/hardwarehacking/create.blade.php';}

    public function store() {
        $name = $_POST['name'];
        $usedFor = $_POST['used_for'];
        $price = $_POST['price'];
        $newItem = new HardwareHacking([
            'name' => $name,
            'used_for' => $usedFor,
            'price' => $price]);
        $newItem->save();
        header('Location: /hardwarehacking');}

    public function edit($id) {
        $item = (new \App\Models\HardwareHacking)->find($id);
        if (!$item) {
            header('Location: /hardwarehacking');
            exit();}
        require '../resources/views/hardwarehacking/edit.blade.php';}

    public function update($id) {
        $item = (new \App\Models\HardwareHacking)->find($id);
        if (!$item) {
            header('Location: /hardwarehacking');
            exit();}
        $item->name = $_POST['name'];
        $item->used_for = $_POST['used_for'];
        $item->price = $_POST['price'];
        $item->save();
        header('Location: /hardwarehacking');}

    public function delete($id) {
        if ($id === null) {
            header('Location: /hardwarehacking');
            exit();}
        $item = (new \App\Models\HardwareHacking)->find($id);
        return require '../resources/views/hardwarehacking/delete.blade.php';}

    public function destroy($id) {
        (new \App\Models\HardwareHacking)->delete($id);
        header('Location: /hardwarehacking');}

    public function confirmDelete($id) {
        $item = (new \App\Models\HardwareHacking)->find($id);
        return require '../resources/views/hardwarehacking/delete.blade.php';}
}
