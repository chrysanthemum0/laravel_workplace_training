###테이블 생성, 변경, 삭제 
select * FROM account;

DROP TABLE employee;

CREATE TABLE employee(
  emp_id INTEGER PRIMARY KEY //담당자 ID
  ,dept_id INTEGER NOT NULL //부문 ID
  ,emp_name VARCHAR(20) NOT NULL // 담당자명
  ,birthday DATE //생년월이 
  ,hiredate DATE NOT NULL DEFAULT '2016-04-01' //입사년월일
  ,gender INTEGER NOT NULL DEFAULT 1 // 성별 남1 여2
  ,sal NUMERIC(9,2) NOT NULL // 급여액
  ,comm NUMERIC(7,2) // 커미션
  ,UNIQUE (dept_id, emp_name) // 동성동명같은 부서 배속 안하게 함
  ,FOREIGN KEY (dept_id) REFERENCES department(dept_id) // 외부키
);

SHOW COLUMNS FROM employee;

ALTER TABLE department ALTER loc SET DEFAULT '東京都新宿区';
SHOW COLUMNS FROM department;

select * FROM account;

DROP TABLE employee;

CREATE TABLE employee(
  emp_id INTEGER PRIMARY KEY //담당자 ID
  ,dept_id INTEGER NOT NULL //부문 ID
  ,emp_name VARCHAR(20) NOT NULL // 담당자명
  ,birthday DATE //생년월이 
  ,hiredate DATE NOT NULL DEFAULT '2016-04-01' //입사년월일
  ,gender INTEGER NOT NULL DEFAULT 1 // 성별 남1 여2
  ,sal NUMERIC(9,2) NOT NULL // 급여액
  ,comm NUMERIC(7,2) // 커미션
  ,UNIQUE (dept_id, emp_name) // 동성동명 같은 부서 배속 안하게 함
  ,FOREIGN KEY (dept_id) REFERENCES department(dept_id) // 외부키
);

SHOW COLUMNS FROM employee;


INSERT INTO employee(100, 20, '丸野 和夫', '1980-01-01', DEFAULT, 
1, 100, 100);


ALTER TABLE department ALTER loc SET DEFAULT '東京都新宿区';
SHOW COLUMNS FROM department;


DROP TABLE employee;
