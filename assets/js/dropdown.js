const dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'));
const dropdownList = dropdownElementList.map((dropdownToggleEl) => {
  return new mdb.Dropdown(dropdownToggleEl);
});