# Web_DB_Display
  Web interface to view sample data and table structure from Oracle Database.

#Usecase
  Deliver a LIVE web representation of sample data and the structure of views in Oracle DB. This allows to beautiful and simple presentation with read only access to the end-user. 

#Tools:
  PHP, ezSQL, Oracle Database

#Description:
  Using PHP and ezSQL framework, I articulate to Oracle. A simple table is available on the index page for smooth navigation.
Each row is a hyperlink to another PHP page. Each subsequent page articlates to the Oracle db and performs queries.
To give the best representation of live data on the table/view each query is : SELECT * from table-name/view-name.
Query results are displayed. Amount of columns are added dynamically by ezSQL's debug() functionality. User is given link to return home and navigate to view sample data of another table/view. Lastly, the structure of all views is available for inspection.
