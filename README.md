# PyroCMS slider widget

## How to use it

* Create a folder to upload the slider's images in Files module, e.g. "home/home-slider":
  * Whether you want to display a title in the slider, fill in "Alt_attribute".
  * Whether you want to display a description in the slider, fill in "Description".
* Create an instance to the widget in Widgets module:
  * "ID": Each slider must have an ID, e.g. "home-slider".
  * "Folder Path": Path to the folder created in Files module.

## Design

Twitter Bootstrap is required. Currently running at Twitter Bootstrap v2.3.1

Some useful CSS (ID = "home-slider"):

```css
#home-carousel img {
  width: 900px;
  height: 350px;
}
#home-carousel .carousel-inner,
#home-carousel .carousel-inner h4,
#home-carousel .carousel-inner p {
  text-align: center;
}
#home-carousel .carousel .item > img {
  display: inline-block;
}
```