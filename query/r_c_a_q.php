  <?php
  $sql = "SELECT r_c.status_id,a_s.an,a_s.hn,a_s.regdate,a_s.dchdate,r_c.date_reques
  ,r_c.user_reques,r_c.reques_id,r_s.status_name,r_s.status_s,
     CONCAT(p_t.pname,'',p_t.fname, ' ',p_t.lname) AS hn_name
      FROM an_stat as a_s
      INNER JOIN patient as p_t ON a_s.hn = p_t.hn
      INNER JOIN request_chart  as r_c ON a_s.an = r_c.an_u
      INNER JOIN request_status  as r_s ON r_c.status_id = r_s.id
";



  $option3 = mysqli_query($con, "SELECT r_c.status_id,r_s.status_s
    FROM request_chart as r_c
    INNER JOIN request_status  as r_s ON r_c.status_id = r_s.id  
      GROUP BY status_id  
     ORDER BY  status_id asc 
     ");
  $result = mysqli_query($con, $sql) or die("Error: " . mysqli_error($con));
