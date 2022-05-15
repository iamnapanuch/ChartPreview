   <?php
    $sql = "SELECT a_s.an,a_s.hn,a_s.regdate,a_s.dchdate,c_s.accept,
     CONCAT(p_t.pname,'',p_t.fname, ' ',p_t.lname) AS hn_name
      FROM an_stat as a_s
      INNER JOIN patient as p_t ON a_s.hn = p_t.hn
      INNER JOIN status_chart  as s_c ON a_s.an = s_c.an_s
      INNER JOIN chart_status  as c_s ON s_c.status_id = c_s.id  
      WHERE a_s.regdate>='2019-01-1' 
     "; // หากต้องการค้นหาปีมากกว่า 1ปี ใช้ b_in.BOOK_YEAR_ID>='2564' จะได้ทั้งปี 2564-2565 แต่ช้ามาก ๆ


    $option2 = mysqli_query($con, "SELECT s_c.status_id,c_s.status_c_s
    FROM status_chart as s_c
    INNER JOIN chart_status  as c_s ON s_c.status_id = c_s.id  
      GROUP BY status_id  
     ORDER BY  status_id asc 
     ");
    $result = mysqli_query($con, $sql) or die("Error: " . mysqli_error($con));
