1) Create a fresh Laravel project
2) Create table with these fields:
- name (string, max 50),
- description (string, max 250),
- file (image, size max 5mb),
- type (should be 1, 2 or 3)
3) Create API to save inputs in DB. Save the image file in a private folder in storage. Before saving make sure you validate incoming data. This API should return only name, type and description after saving data.
4) Create an API to list the whole records only with name, type and description being returned. Data should paginate by 10 at a time.
5) Create an API to show a single record with name, type, description and temporary URL of image (don't display image path directly, you should create temporary URL for image path and it should expire in 10 minutes).
6) Create a cron job to delete 30 days old records each hour. Writing clean codes and using Laravel functionalities will be a plus.
