<?php


/*SELECT 
    posts.*,
    images.image_path as all_images,
    users.first_name as name,
    users.last_name as surname
    
FROM 
    posts
LEFT JOIN 
    images ON posts.id = images.post_id
LEFT JOIN 
    users ON posts.user_id = users.id;*/