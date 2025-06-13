-- 181. Employees Earning More Than Their Managers
-- Solved
-- Easy
-- Topics
-- premium lock icon
-- Companies
-- SQL Schema
-- Pandas Schema
-- Table: Employee

-- +-------------+---------+
-- | Column Name | Type    |
-- +-------------+---------+
-- | id          | int     |
-- | name        | varchar |
-- | salary      | int     |
-- | managerId   | int     |
-- +-------------+---------+
-- id is the primary key (column with unique values) for this table.
-- Each row of this table indicates the ID of an employee, their name, salary, and the ID of their manager.
 

-- Write a solution to find the employees who earn more than their managers.

-- Return the result table in any order.

-- The result format is in the following example.

SELECT E.NAME AS Employee FROM Employee E JOIN
EMPLOYEE E2 ON E.MANAGERID = E2.ID
AND E.SALARY > E2.SALARY;