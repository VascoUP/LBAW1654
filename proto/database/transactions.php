<?
BEGIN;
DELETE FROM ProjectCoordinator WHERE userID = ?;
DELETE FROM ProjectUsers WHERE userID = ?;
DELETE FROM UserSite WHERE username = ?;
COMMIT;

BEGIN;
DELETE FROM TagProject WHERE tagID = ?;
-- optional (the tag may exists) --
INSERT INTO Tag(name) VALUES(?);
INSERT INTO TagProject(tagID, projectID) VALUES(?,?);
COMMIT;

BEGIN;
DELETE FROM ProjectCoordinator WHERE projectID = ?;
DELETE FROM ProjectUsers WHERE projectID = ?;
DELETE FROM Project WHERE projectID = ?;
COMMIT;

BEGIN;
-- optional (the tag may exists) --
INSERT INTO Tag(name) VALUES(?);
INSERT INTO TagProject(tagID, projectID) VALUES(?,?);
INSERT INTO TagProject(tagID, projectID) VALUES(?,?);
COMMIT;
?>