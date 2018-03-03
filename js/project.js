/* This file handles all of the switching of projects */

/*

  - Need a function to get all of the projects
  - Need a function to determine which project is active
  - Need a function to set the active project
  - Need a function to set all other projects inactive

*/

var project = {
  titles : ["smoogs", "charlieco", "entrision"],
  active : "smoogs",

  setActive: function (project) {
    document.getElementById("mainWrapper").dataset.project = project;
    this.active = project;
    this.setTitleDescription();
  },

  //
  hideInactive : function () {
    for (i = 0; i < project.titles.length; i++) {
      if (!project.titles[i] == project.active) {
        var name = document.getElementById("projectList").querySelector('[data-name="' + project.titles[i] + '"]');
        name.style.display = "none";
      }
    }
  },

  // This function gets the height of the title box on the leftSlide
  // later this will be used to translateY the title to the proper height
  getTitleHeight : function () {
    var title = document.getElementById("leftSlide__title");
    return title.clientHeight;
  },

  //
  getDescriptionHeight : function () {
    var description = document.getElementById("leftSlide__description");
    return description.clientHeight;
  },

  //
  getImageHeight : function () {
    var projectImage = document.getElementById("projectImage");
    return projectImage.clientHeight;
  },

  // Set Title & Description
  setTitleDescription : function () {
    var key;
    // Get array key to know how much to move title & description
    for (i = 0; i < this.titles.length; i++) {
      if (this.titles[i] == this.active) {
        key = i;
      }
    }
    console.log("equation: " + key * this.getTitleHeight());
    document.getElementById("leftSlide__title").style.transform = "translateY(-" + key * this.getTitleHeight() + "px)";
    document.getElementById("leftSlide__description").style.transform = "translateY(-" + key * this.getDescriptionHeight() + "px)";
    document.getElementById("projectImage").style.transform = "translateY(-" + key * this.getImageHeight() + "px)";
  }

}
