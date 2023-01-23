-- Create a new table called 'EMPLOYEE' in schema 'dbo'
-- Drop the table if it already exists
IF OBJECT_ID('dbo.EMPLOYEE', 'U') IS NOT NULL
DROP TABLE dbo.EMPLOYEE
GO
-- Create the table in the specified schema
CREATE TABLE dbo.EMPLOYEE
(
    EMPLOYEEId INT NOT NULL IDENTITY(1,1) PRIMARY KEY, -- primary key column
    EMP_NAME [NVARCHAR](50) NOT NULL,
    EMP_SALARY[NVARCHAR](50) NOT NULL,
    EMP_DESIGNATION [NVARCHAR](50) NOT NULL
   
    -- specify more columns here
);
GO